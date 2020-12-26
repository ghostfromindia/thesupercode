<?php

namespace App\Http\Controllers\Client\Youtube;

use App\Http\Controllers\Controller;
use App\Models\Youtube\Categories;
use App\Models\Youtube\Channels;
use App\Models\Youtube\Statistics;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YTController extends Controller
{
    public function home(){
        $channels = DB::table('youtube_channels as ch')
            ->leftjoin('youtube_categories as yc','yc.id','=','ch.primary_category')
            ->leftjoin('youtube_statistics as ys','ys.channel_id','=','ch.id')
            ->leftjoin('files as f','f.id','=','ch.channel_profile_image')
            ->select('ch.id', 'channel_name', 'ch.channel_id','category_name','ch.updated_at','subscriber_count','ch.slug as chslug','yc.slug as ycslug','f.url')->where('ys.statistics_date',Carbon::now()->format('Y-m-d'))
            ->orderby('subscriber_count','DESC')->get();

        return view('client.modules.youtube.home',compact('channels'));
    }

    public function category($slug){
        $category = Categories::where('slug',$slug)->first();
        if(!$category){
            abort(404);
        }
        $channels = DB::table('youtube_channels as ch')
            ->leftjoin('youtube_categories as yc','yc.id','=','ch.primary_category')
            ->leftjoin('youtube_statistics as ys','ys.channel_id','=','ch.id')
            ->leftjoin('files as f','f.id','=','ch.channel_profile_image')
            ->select('ch.id', 'channel_name', 'ch.channel_id','category_name','ch.updated_at','subscriber_count','ch.slug as chslug','yc.slug as ycslug','f.url')->where('ys.statistics_date',Carbon::now()->format('Y-m-d'))
            ->where('yc.slug',$slug)
            ->orderby('subscriber_count','DESC')->get();



        return view('client.modules.youtube.category',compact('channels','category'));
    }

    public function channel($slug){
        $channel = DB::table('youtube_channels as ch')
            ->leftjoin('youtube_categories as yc','yc.id','=','ch.primary_category')
            ->leftjoin('youtube_statistics as ys','ys.channel_id','=','ch.id')
            ->leftjoin('files as f','f.id','=','ch.channel_profile_image')
            ->select('ch.id', 'channel_name', 'ch.channel_id','category_name','ch.updated_at','subscriber_count','ch.slug as chslug','yc.slug as ycslug',
                'f.url')
            ->where('ch.slug',$slug)
            ->orderby('subscriber_count','DESC')->first();

        $stats = Statistics::where('channel_id',$channel->id)->orderby('statistics_date','DESC')->get();

        return view('client.modules.youtube.channel',compact('channel','stats'));
    }

    public function make_category_slug(){
        $category = Categories::all();
        foreach ($category as $obj){
            $cat = Categories::find($obj->id);
            $cat->slug = $this->slugify($obj->category_name);
            $cat->save();
        }

        $category = Channels::all();
        foreach ($category as $obj){
            $cat = Channels::find($obj->id);
            $cat->slug = $this->slugify($obj->channel_name);
            $cat->save();
        }
    }

    public function most_viewed(){

         $channels_1 = $this->ranklist(Carbon::now()->format('Y-m-d'));
        $channels_2 = $this->ranklist(Carbon::now()->subDay()->format('Y-m-d'));
        $channels_3 = $this->ranklist(Carbon::now()->subDays(2)->format('Y-m-d'));
        $channels_4 = $this->ranklist(Carbon::now()->subDays(3)->format('Y-m-d'));
        $channels_5 = $this->ranklist(Carbon::now()->subDays(4)->format('Y-m-d'));
        $channels_6 = $this->ranklist(Carbon::now()->subDays(5)->format('Y-m-d'));



        return view('client.modules.youtube.date',compact('channels_1','channels_2','channels_3','channels_4','channels_5','channels_6'));
    }

    public function ranklist($date){
        return DB::select("
                                    SELECT 
                                    cat.category_name,
                                    f.url,
                                    yc.channel_name,
                                    ys.channel_id,
                                    ys.view_count,
                                    date_format(ys.statistics_date, '%Y-%m-%d') AS date_taken,
                                    DATE_SUB(ys.statistics_date, INTERVAL 1 DAY) as previous_date,
                                    (SELECT ys1.view_count FROM youtube_statistics ys1 WHERE  ys1.statistics_date = DATE_SUB(ys.statistics_date, INTERVAL 1 DAY) AND ys1.channel_id = ys.channel_id LIMIT 1) as previous_views,
                                    (ys.view_count-(SELECT ys1.view_count FROM youtube_statistics ys1 WHERE  ys1.statistics_date = DATE_SUB(ys.statistics_date, INTERVAL 1 DAY) AND ys1.channel_id = ys.channel_id LIMIT 1)) as dif
                                    FROM youtube_statistics ys
                                    INNER JOIN youtube_channels as yc ON ys.channel_id = yc.id
                                    LEFT JOIN files as f ON yc.channel_profile_image = f.id
                                    LEFT JOIN youtube_categories as cat ON yc.primary_category = cat.id
                                    WHERE ys.statistics_date = '".Carbon::parse($date)."'
                                    ORDER BY dif DESC
                                    ");
    }
}
