<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\LeadDelivery;
use Carbon\Carbon;
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

    public function date_wise_data($date){
        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json'

        );
        //date('d-m-Y')
        $path = 'https://cdn-api.co-vin.in/api/v2/appointment/sessions/calendarByDistrict?district_id=303&date='.$date;

        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);

//$body = '{}';
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($ch, CURLOPT_POSTFIELDS,$body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $authToken = curl_exec($ch);
        return $authToken;
    }

    public function covaxin(){


//        if(session()->has('data')){
//            $data = session('data');
//            // dd($data);
//            return view('client.pages.covaxine',compact('data'));
//        }

        $date = Carbon::now();

        $data = [];
        for ($i=0;$i<4;$i++){
            $d = $this->date_wise_data($date->addDays($i)->format('d-m-Y'));
            $d = json_decode($d);
            if(!empty($d->centers)){
                if(is_array($d->centers)){
                    $data = array_merge($data,$d->centers);
                }
            }
        }

        session()->put('data',collect($data));
        // $data = $data->centers;

        return view('client.pages.covaxine',compact('data'));
    }


}
