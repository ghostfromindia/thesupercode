<?php

namespace App\Models\Quiz;

use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use ValidationTrait;

    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }

    public function __construct( array $attributes = array()) {

        parent::__construct($attributes);
        $this->__validationConstruct();
    }

    protected $table = 'quiz_answers';

    protected $fillable = ['answer','question_id'];
    protected $dates = ['created_at','updated_at'];

    protected function setRules()
    {
        $this->val_rules = array(
            'answer' => 'required',
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }

    public function quiz(){
        return $this->belongsTo('App\Models\Quiz\Question','question_id');
    }

}
