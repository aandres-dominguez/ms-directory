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
        Schema::create('subarea', function (Blueprint $table) {
            $table->increments('subarea_id');
            $table->unsignedInteger('area_id');
            $table->string('subarea_description', 250);
            $table->foreign('area_id')->references('area_id')->on('area');
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
        Schema::dropIfExists('subarea');
    }
};
