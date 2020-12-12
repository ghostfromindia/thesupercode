<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Youtube\Categories;
use Illuminate\Http\Request;

class Select2Controller extends Controller
{
    public function ytcategory_list(Request $r){
        $json = [];
        $categories = Categories::select('id','category_name')->where('category_name', 'like', $r->q.'%')->get();
        foreach($categories as $obj){
            $json[] = ['id'=>$obj->id, 'text'=>$obj->category_name];
        }
        return \Response::json($json);
    }
}
