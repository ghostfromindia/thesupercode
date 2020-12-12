<?php

namespace App\Models\Youtube;

use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    use ValidationTrait;

    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }

    public function __construct( array $attributes = array()) {

        parent::__construct($attributes);
        $this->__validationConstruct();
    }

    protected $table = 'youtube_categories';

    protected $fillable = ['category_name'];
    protected $dates = ['created_at','updated_at'];

    protected function setRules()
    {
        $this->val_rules = array(
            'category_name' => 'required',
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }


}
