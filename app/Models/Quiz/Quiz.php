<?php

namespace App\Models\Quiz;

use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use ValidationTrait;

    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }

    public function __construct( array $attributes = array()) {

        parent::__construct($attributes);
        $this->__validationConstruct();
    }

    protected $table = 'quiz_quiz';

    protected $fillable = ['category_id','slug','top_description','bottom_description','primary_image_id','hits','created_at','updated_at','title','summary','question_count','is_show_error	','is_prize_available'];
    protected $dates = ['created_at','updated_at'];

    protected function setRules()
    {
        $this->val_rules = array(
            'slug' => 'required',
            'title' => 'required',
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }

    public function questions(){
       return Question::where('quiz_id',$this->id)->inRandomOrder()->limit($this->question_count)->get();
    }

    public function category(){
        return $this->belongsTo('App\Models\Quiz\Category','category_id');
    }

}
