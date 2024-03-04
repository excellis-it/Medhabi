<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBachelorDurationsCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bachelor_durations_cms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('program_type_cms_id')->nullable();
            $table->string('duration_image')->nullable();
            $table->string('duration_title')->nullable();
            $table->longText('duration_desc')->nullable();
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
        Schema::dropIfExists('bachelor_durations_cms');
    }
}
