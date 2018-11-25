<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFariTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fari', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('oc')->nullable();
            $table->string('phone')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('address')->nullable();
            $table->integer('division_id')->unsigned();
            $table->integer('area_id')->unsigned();
            $table->integer('zone_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('thana_id')->unsigned();

            $table->foreign('division_id')->references('id')->on('division')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('area')->onDelete('cascade');
            $table->foreign('zone_id')->references('id')->on('zone')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('district')->onDelete('cascade');
            $table->foreign('thana_id')->references('id')->on('thana')->onDelete('cascade');

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
        Schema::dropIfExists('fari');
    }
}
