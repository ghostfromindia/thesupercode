<?php

namespace App\Http\Controllers\Admin\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz\Answer;
use App\Models\Quiz\Question;
use App\Models\Quiz\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($id,$qid=null){
        $questions = Question::where('quiz_id',decrypt($id))->get();
        $route = 'admin.quiz';
        $obj  = Quiz::find(decrypt($id));
        if(!empty($qid)){
            $question = Question::find($qid);
        }else{
            $question = null;
        }
        return view('admin.modules.quiz.quiz.question',compact('route','obj','question','questions'));
    }

    public function update(Request $request){
        if($request->id){
            $q = Question::find(decrypt($request->id));
        }else{
            $q = new Question();
        }
        $data = $request->all();
        $data['quiz_id'] = decrypt($request->quiz_id);
        $q->validate($data);
        $q->fill($data);
        $q->save();

        Answer::where('question_id',$q->id)->delete();
        foreach ($request->answer as $obj){
            $a = new Answer;
            $a->question_id = $q->id;
            if(strpos($obj,'---') !== false){
                $a->answer = str_replace('---','',$obj);
                $a->is_correct = 1;
            }else{
                $a->answer = str_replace('---','',$obj);
            }
            $a->save();
        }
        return redirect('admin/quiz/question/'.$request->quiz_id.'/'.$q->id);
    }

    public function remove($id){
        $q = Question::find(decrypt($id));
        $quiz_id = $q->quiz_id;
        $q->delete();
        return redirect('admin/quiz/question/'.encrypt($quiz_id));
    }
}
