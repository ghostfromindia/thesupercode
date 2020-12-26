<?php

namespace App\Models\Youtube;

use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
    use ValidationTrait;

    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }

    public function __construct( array $attributes = array()) {

        parent::__construct($attributes);
        $this->__validationConstruct();
    }

    protected $table = 'youtube_channels';

    protected $fillable = ['channel_name','slug','channel_id','channel_user_name','channel_profile_image','primary_category','created_by'];
    protected $dates = ['created_at','updated_at'];



    protected function setRules()
    {
        $this->val_rules = array(
            'channel_name' => 'required',
            'channel_id' => 'required'
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }

    public function category(){
        return $this->belongsTo('App\Models\Youtube\Categories','primary_category');
    }

    public function image(){
        return $this->belongsTo('App\Models\Files','channel_profile_image');
    }
}
