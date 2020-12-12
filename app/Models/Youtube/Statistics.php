<?php

namespace App\Models\Youtube;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    protected $table = 'youtube_statistics';

    public function yesterday(){
        $yesterday = Carbon::parse($this->statistics_date)->subDay()->format('Y-m-d');
        return Statistics::where('statistics_date',$yesterday)->where('channel_id',$this->channel_id)->first();
    }
}
