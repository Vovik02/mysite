<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->increments('friend_id');
            $table->string('friend_name', 100)->nullable(false);
            $table->string('friend_sex', 20)->nullable(false);
            $table->tinyInteger('friend_age')->unsigned()->nullable(false);
            $table->string('friend_phone', 15)->nullable(false);
            $table->tinyText('friend_adress')->nullable(false);
            $table->tinyText('friend_study')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friends');
    }
};
