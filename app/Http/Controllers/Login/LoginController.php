<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

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

    public function redirectToProvider($website)
    {
        return Socialite::driver($website)->scopes(['https://www.googleapis.com/auth/youtube.readonly'])->redirect();
    }

    public function handleProviderCallback($website)
    {
        $user = Socialite::driver($website)->user();



        if(!empty($user->email)){
            $u = User::where('email',$user->email)->first();
            if(!$u){
                $u = new User();
                $u->is_google_login = 1;
                $u->google_token = $user->token;
                $u->name = $user->name;
                $u->email = $user->email;
                $u->password = Hash::make(rand(1111,9999).$user->email.rand(1111,2222));
                $u->save();
            }

            if (Auth::loginUsingId($u->id)) {


                $u->is_google_login = 1+$u->google_login;
                $u->google_token = $user->token;
                $u->save();

                if($u->email == 'tsupercode@gmail.com'){
                    return redirect('ytchannel/sync-channels');
                }

                return redirect('/');
            }
        }
        session()->flash('error','Google login failed, please try other options');
        return redirect('login');

    }
}
