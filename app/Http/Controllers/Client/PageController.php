<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\UploaderTrait;

class PageController extends Controller
{

    use UploaderTrait;

    public function home(){
        return view('client.pages.home');
    }

    public function image_upload(){
        $this->uploadit_link('https://yt3.ggpht.com/ytc/AAUvwnjipJKbPXIbI0KeW_o49gCuiHLaJZVdHrPn1WWeBw=s800-c-k-c0x00ffffff-no-rj','files/youtube/channels','youtuber-image-1','youtube');
    }

    public function terms_condition(){
        return view('client.pages.terms_condition');
    }

    public function privacy_policy(){
        return view('client.pages.privacy_policy');
    }


}
