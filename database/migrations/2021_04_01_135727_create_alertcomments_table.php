<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertcommentsTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertcomments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->bigInteger('alert_id')->unsigned()->index()->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('comment')->nullable();
            $table->string('time')->nullable();
            $table->timestamps();
            $table->foreign('alert_id')->references('id')->on('alerts')->onDelete('cascade');
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
        Schema::dropIfExists('alertcomments');
    }
}
