<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubeStatistics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtube_statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('channel_id');
            $table->integer('integer');
            $table->integer('subscriberCount');
            $table->integer('hiddenSubscriberCount');
            $table->integer('videoCount');
            $table->date('statistics_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('youtube_statistics');
    }
}
