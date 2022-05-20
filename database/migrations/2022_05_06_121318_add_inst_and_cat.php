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
        Schema::table('friends', function (Blueprint $table) {
            $table->string('friend_inst', 50)->nullable('true');
            $table->Integer('friend_cat')->unsigned();
            $table->foreign('friend_cat')
                ->references('id')
                ->on('friend_categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('friends', function (Blueprint $table) {
            $table->dropColumn('friend_inst');
            $table->dropColumn('friend_cat');
        });
    }
};
