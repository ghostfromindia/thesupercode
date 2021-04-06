<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz\Question;
use App\Models\Quiz\Quiz;
use App\Models\Quiz\UserQuiz;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class QuizController extends Controller
{
    public function home(){
        $quizes = Quiz::all();
        return view('client.modules.quiz.home',compact('quizes'));
    }

    public function category(){
        return view('client.modules.quiz.category');
    }

    public function quiz($slug){
        $quiz = Quiz::where('slug',$slug)->first();
        if(!$quiz){
            abort(404);
        }
        return view('client.modules.quiz.quiz',compact('quiz'));
    }

    public function quiz_get_questions($id){

        $userquiz = UserQuiz::where('user_id',Auth::user()->id)->where('quiz_id',decrypt($id))->first();

        if(!$userquiz){
            $userquiz = new UserQuiz();

            $quiz = Quiz::find(decrypt($id));

            $data = [];

            foreach($quiz->questions() as $que){
                $d['que'] = $que->question;
                $d['ans'] = [];

                foreach ($que->answers() as $a){
                    $ans['answer'] = $a->answer;
                    $ans['id'] = $a->id;
                    array_push($d['ans'],$ans);
                }

                array_push($data,$d);
            }

            $userquiz->quiz_json = json_encode($data);
            $userquiz->user_id = Auth::user()->id;
            $userquiz->quiz_id = decrypt($id);
            $userquiz->started = Carbon::now();
            $userquiz->save();

        }

        return $userquiz->quiz_json;
    }

    public function login(){
        session()->put('url',url()->previous());
        return Socialite::driver('google')->redirect();
    }

    public function login_callback(){
        $user = Socialite::driver('google')->user();

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

                return redirect(session('url'));
            }
        }
    }
}
