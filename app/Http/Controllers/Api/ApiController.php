<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Youtube\Categories;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function categories(){
        $categories = Categories::all();
        return response([
            'data' => $categories,
            'status' => true
        ], 200);
    }
}
