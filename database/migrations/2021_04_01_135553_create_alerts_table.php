<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content');    // content カラム追加
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('title')->nullable(); //title カラム追加
            $table->string('image')->nullable();      // image  カラム追加
            $table->string('area')->nullable();     // area   カラム追加
            $table->string('city')->nullable();     // area   カラム追加
            $table->string('location')->nullable();      // location カラム追加
            $table->string('time')->nullable();         // timeカラム追加
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('edit')->nullable();
            $table->timestamps();
            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alerts');
    }
}
