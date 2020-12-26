<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Youtube\Channels;
use App\Models\Youtube\Statistics;
use App\Traits\ResourceTrait;
use App\Traits\UploaderTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\One\User;
use Yajra\DataTables\DataTables;

class YTChannelController extends BaseController
{
    use ResourceTrait;
    use UploaderTrait;

    public function __construct()
    {
        Parent::__construct();

        $this->model = new Channels();
        $this->route .= '.ytchannel';
        $this->views .= '.modules.youtube.ytchannel';
        $this->url = "admin/ytchannel/";

        $this->resourceConstruct();

    }

    protected function getCollection()
    {
        return DB::table('youtube_channels as ch')
            ->leftjoin('youtube_categories as yc','yc.id','=','ch.primary_category')
            ->leftjoin('youtube_statistics as ys','ys.channel_id','=','ch.id')
            ->select('ch.id', 'channel_name', 'ch.channel_id','category_name','ch.updated_at','subscriber_count');
    }

    protected function initDTData($collection, $queries = []) {
        $route = $this->route;
        return DataTables::of($collection)
            ->setRowId('row-{{ $id }}')
            ->addColumn('updated_at', function($obj) use ($route, $queries) {
                return Carbon::parse($obj->updated_at)->format('d-M-y H:i');
            })
            ->addColumn('action_edit', function($obj) use ($route, $queries) {
                return '<a href="'.route($route.'.edit', [encrypt($obj->id)]).'"><img src="https://img.icons8.com/cotton/64/000000/edit--v1.png" width="20px"/></a>';
            })
            ->addColumn('action_delete', function($obj) use ($route, $queries) {
                return '<a  class="btn-warning-popup" href="'.route($route.'.destroy', [encrypt($obj->id)]).'" data-message="Are you sure to delete?  Associated data will be removed if it is deleted." ><img src="https://img.icons8.com/fluent/48/000000/delete-sign.png" width="20px"/></a>';
            })->rawColumns(['action_edit', 'action_delete']);
    }

    public function sync_statistics(){
        $channels = Channels::get();
        $today =  Carbon::now()->format('Y-m-d');

        foreach ($channels as $obj){

            $stats = Statistics::where('channel_id',$obj->id)->where('statistics_date',$today)->first();

            if(!$stats){

                $data= json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics,status,id&id='.$obj->channel_id.'&key='.$this->youtube_key));



                if(!empty($data->items[0])){

                    $stats = Statistics::where('channel_id',$obj->id)->where('statistics_date',$today)->first();
                    if(!$stats){
                        $stats = new Statistics();
                    }
                    $stats->channel_id = $obj->id;
                    if(!empty($data->items[0]->statistics->subscriberCount)){
                        $stats->subscriber_count = $data->items[0]->statistics->subscriberCount;
                    }else{
                        $stats->subscriber_count = 0;
                    }

                    $stats->view_count = $data->items[0]->statistics->viewCount;
                    $stats->hidden_subscriber_count = $data->items[0]->statistics->hiddenSubscriberCount;
                    $stats->video_count = $data->items[0]->statistics->videoCount;
                    $stats->statistics_date = Carbon::now()->format('Y-m-d');
                    $stats->save();
                }else{
                    echo 'Channel id of <b>'.$obj->channel_name.'</b> is not valid<br>';
                }

            }
        }
    }

    public function sync_channels($pageToken = null){
        $client = new \Google_Client();
        $client->setAccessToken(Auth::user()->google_token);

        // Define service object for making API requests.
        $service = new \Google_Service_YouTube($client);

        if(!empty($pageToken)){
            $queryParams = [
                'mine' => true,
                'maxResults' => 50,
                'pageToken' => $pageToken
            ];
        }else{
            $queryParams = [
                'mine' => true,
                'maxResults' => 50
            ];
        }


        $response = $service->subscriptions->listSubscriptions('snippet,contentDetails', $queryParams);
        $i=0;
        foreach ($response->items as $obj){

            $data['channel_name'] = $obj->snippet->title;
            $data['slug'] = $this->slugify($obj->snippet->title);
            $data['channel_id'] = $obj->snippet->resourceId->channelId;
            $data['channel_user_name'] = $obj->snippet->title;
            $data['created_by'] = 2215;

            $channel = Channels::where('channel_id',$obj->snippet->resourceId->channelId)->first();
            if(!$channel){
                $channel = new Channels();


                $resource_id = $this->uploadit_link($obj->snippet->thumbnails->medium->url,'files/youtube/channels',self::slugify($obj->snippet->title),'youtube','jpg');

                if($resource_id){
                    $data['channel_profile_image'] = $resource_id;
                }

                $channel->fill($data);
                $channel->save();
            }else{
                if(empty($channel->channel_profile_image)){
                    $resource_id = $this->uploadit_link($obj->snippet->thumbnails->medium->url,'files/youtube/channels',self::slugify($obj->snippet->title),'youtube','jpg');

                    if($resource_id){
                        $channel->channel_profile_image = $resource_id;
                        $channel->save();
                    }
                }
            }

        }

        if(!empty($response->getNextPageToken())){
            $this->sync_channels($response->getNextPageToken());
        }else{
            return redirect('/');
        }



    }
}
