<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function register(){
        return view('login.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    protected function attempt_login(Request $request){

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }else{
            session()->flash('error','Please enter a valid username and password to login');
            return redirect('login');
        }
    }

    protected function attempt_register(Request $request){
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user = new User();
        $user->validate($data);
        $user->fill($data);
        $user->save();

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }else{
            abort(500);
        }
    }
}
