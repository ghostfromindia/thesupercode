<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Youtube\Channels;
use App\Models\Youtube\Statistics;
use App\Traits\ResourceTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class YTChannelController extends BaseController
{
    use ResourceTrait;

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

            $data= json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics,status,id&id='.$obj->channel_id.'&key='.$this->youtube_key));



            if(!empty($data->items[0])){

                $stats = Statistics::where('channel_id',$obj->id)->where('statistics_date',$today)->first();
                if(!$stats){
                    $stats = new Statistics();
                }
                $stats->channel_id = $obj->id;
                $stats->subscriber_count = $data->items[0]->statistics->subscriberCount;
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
