<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complain', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone');
            $table->string('message')->nullable();
            $table->string('img')->nullable();
            $table->string('audio')->nullable();
            $table->string('video')->nullable();
            
            $table->integerstring('thana_id')->unsigned()->nullable();
            $table->integer('fari_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('thana_id')->references('id')->on('thana');
            $table->foreign('fari_id')->references('id')->on('fari');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complain');
    }
}
