<?php

namespace App\Http\Controllers\Client\Youtube;

use App\Http\Controllers\Controller;
use App\Models\Youtube\Categories;
use App\Models\Youtube\Channels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YTController extends Controller
{
    public function home(){
        $channels = DB::table('youtube_channels as ch')
            ->leftjoin('youtube_categories as yc','yc.id','=','ch.primary_category')
            ->leftjoin('youtube_statistics as ys','ys.channel_id','=','ch.id')
            ->select('ch.id', 'channel_name', 'ch.channel_id','category_name','ch.updated_at','subscriber_count','ch.slug as chslug','yc.slug as ycslug')->distinct('ch.id')
            ->orderby('subscriber_count','DESC')->get();

        return view('client.modules.youtube.home',compact('channels'));
    }

    public function category($slug){
        $channels = DB::table('youtube_channels as ch')
            ->leftjoin('youtube_categories as yc','yc.id','=','ch.primary_category')
            ->leftjoin('youtube_statistics as ys','ys.channel_id','=','ch.id')
            ->select('ch.id', 'channel_name', 'ch.channel_id','category_name','ch.updated_at','subscriber_count','ch.slug as chslug','yc.slug as ycslug')->distinct('ch.id')
            ->where('yc.slug',$slug)
            ->orderby('subscriber_count','DESC')->get();

        return view('client.modules.youtube.category',compact('channels'));
    }

    public function channel($slug){
        $channel = DB::table('youtube_channels as ch')
            ->leftjoin('youtube_categories as yc','yc.id','=','ch.primary_category')
            ->leftjoin('youtube_statistics as ys','ys.channel_id','=','ch.id')
            ->select('ch.id', 'channel_name', 'ch.channel_id','category_name','ch.updated_at','subscriber_count','ch.slug as chslug','yc.slug as ycslug')
            ->where('ch.slug',$slug)
            ->orderby('subscriber_count','DESC')->first();

        return view('client.modules.youtube.channel',compact('channel'));
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
}
