<?php

namespace App\Models\Quiz;

use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ValidationTrait;

    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }

    public function __construct( array $attributes = array()) {

        parent::__construct($attributes);
        $this->__validationConstruct();
    }

    protected $table = 'quiz_categories';

    protected $fillable = ['category_name','slug','parent_category_id','primary_image_id'];
    protected $dates = ['created_at','updated_at'];

    protected function setRules()
    {
        $this->val_rules = array(
            'slug' => 'required',
            'category_name' => 'required',
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {

        return $this->parent_validate($data);
    }


    public function category(){
        return $this->belongsTo('App\Models\Quiz\Category','parent_category_id');
    }

    public function youtuber_image(){
        $url = 'https://i.redd.it/pw3g59c408u51.jpg';
        return $url;
    }
}
