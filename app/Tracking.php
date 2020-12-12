<?php

namespace App;

use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }

    public function __construct( array $attributes = array()) {

        parent::__construct($attributes);
        $this->__validationConstruct();
    }


    protected $table = 'tracking';

    protected $fillable = ['user_id','page_url','action','role','message'];
    protected $dates = ['created_at','updated_at'];

    protected function setRules()
    {
        $this->val_rules = array(
            'action' => 'required',
            'role' => 'required'
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }
}
