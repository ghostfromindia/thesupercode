<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubeChannels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtube_channels', function (Blueprint $table) {
            $table->id();
            $table->string('channel_name');
            $table->string('channel_id')->unique()->nullable();
            $table->string('channel_user_name')->unique()->nullable();
            $table->integer('channel_profile_image')->nullable();
            $table->integer('primary_category')->nullable();
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
        Schema::dropIfExists('youtube_channels');
    }
}
