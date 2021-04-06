<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\LeadDelivery;
use Illuminate\Http\Request;
use App\Traits\UploaderTrait;
use Illuminate\Support\Facades\Mail;

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

    public function cache(){
        $dirname = public_path().'/web';
        if (is_dir($dirname))
            $dir_handle = opendir($dirname);
        if (!$dir_handle)
            return false;
        while($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                if (!is_dir($dirname."/".$file))
                    unlink($dirname."/".$file);
                else
                    delete_directory($dirname.'/'.$file);
            }
        }
        closedir($dir_handle);
        rmdir($dirname);
        return true;
    }

    public function savelead(Request $request){
        $data = $request->all();

        $to = 'b2akhilmj@gmail.com';
        Mail::to($to)->send(new LeadDelivery($request));

    }


}
