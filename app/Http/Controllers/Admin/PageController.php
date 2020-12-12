<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $users = User::orderby('id','DESC')->get();
        return view('admin.pages.home',compact('users'));
    }
}
