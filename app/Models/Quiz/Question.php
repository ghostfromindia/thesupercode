<?php

namespace App\Models\Quiz;

use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use ValidationTrait;

    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }

    public function __construct( array $attributes = array()) {

        parent::__construct($attributes);
        $this->__validationConstruct();
    }

    protected $table = 'quiz_questions';

    protected $fillable = ['question','primary_image_id','points','quiz_id'];
    protected $dates = ['created_at','updated_at'];

    protected function setRules()
    {
        $this->val_rules = array(
            'question' => 'required',
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }

    public function quiz(){
        return $this->belongsTo('App\Models\Quiz\Quiz','quiz_id');
    }

    public function answers(){
        return $a = Answer::where('question_id',$this->id)->get();
    }



    public function answer($id){
       $a = Answer::where('question_id',$this->id)->get();
       if(count($a)>0){
           if(!empty($a[$id])){
               if($a[$id]->is_correct == 1){
                   return '---'.$a[$id]->answer;
               }else{
                   return $a[$id]->answer;
               }
           }
       } else{
         return null;
       }
    }



}
