<?php

namespace App\Traits;
use App\Models\Files;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Foundation\Validation\ValidatesRequests as Validate;
use App\Traits\ValidationTrait;

trait UploaderTrait {

    public function uploadit($folder_name,$file,$file_name,$label='NA'){


        $data = [];
        $data['folder'] = $folder_name;
        $data['extension'] = $file->getClientOriginalExtension();
        $data['label'] = $label;
        $data['file_name'] = $file_name;
        $data['size'] = $file->getSize();


        if ($file) {

            $f = new Files();
            $f->fill($data);
            $f->save();

            $name = $file_name.'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/'.$folder_name);
            $file->move($destinationPath, $name);

            return $f->id;
        }else{
            return false;
        }

    }

    public function uploadit_link($url,$folder_name,$file_name,$label='NA',$ext='jpg'){


        $info = pathinfo($url);
        $contents = file_get_contents($url);
        $file = 'public/'.$folder_name.'/'.$file_name.'.'.$ext;

        if (!file_exists('public/'.$folder_name)) {
            mkdir('public/'.$folder_name, 0755, true);
        }

        file_put_contents($file, $contents);
//        $uploaded_file = new UploadedFile($file, $file_name.'.'.$info['extension']);
//        file_put_contents($img, file_get_contents($url));
        $data = [];
        $data['folder'] = $folder_name;
        $data['extension'] = $ext;
        $data['label'] = $label;
        $data['file_name'] = $file_name;
        $data['size'] = filesize($file);
        $data['url'] = $folder_name.'/'.$file_name.'.'.$ext;


        if ($file) {

            $f = new Files();
            $f->fill($data);
            $f->save();


            return $f->id;
        }else{
            return NULL;
        }

    }

}