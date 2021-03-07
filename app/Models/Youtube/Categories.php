<?php

namespace App\Models\Youtube;

use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    protected $fillable = ['category_name','slug'];
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

    public function youtuber_image(){
        $y = DB::table('youtube_channels as channel')
            ->join('youtube_statistics','youtube_statistics.channel_id','=','channel.id')
            ->join('files','files.id','=','channel.channel_profile_image')
            ->select('subscriber_count','files.url')
            ->where('channel.primary_category',$this->id)
            ->orderBy('youtube_statistics.subscriber_count','DESC')
            ->first();

        if(empty($y)){
            $url = 'https://i.redd.it/pw3g59c408u51.jpg';
        }else{
            $url = asset($y->url);
        }
        return $url;
    }


}
