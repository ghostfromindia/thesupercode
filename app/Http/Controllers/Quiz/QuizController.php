<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function home(){
        return view('client.modules.quiz.home');
    }

    public function category(){
        return view('client.modules.quiz.category');
    }

    public function quiz(){
        return view('client.modules.quiz.quiz');
    }
}
