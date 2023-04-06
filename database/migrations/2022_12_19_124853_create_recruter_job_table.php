<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruterJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruter_job', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('specification')->nullable();
            $table->text('location')->nullable();
            $table->string('work_place');
            $table->string('experience')->nullable();
            $table->string('salary')->nullable();
            $table->string('schedule')->nullable();
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('employment_type')->nullable();
            $table->text('other_description')->nullable();
            $table->text('upload_file')->nullable();
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
        Schema::dropIfExists('recruter_job');
    }
}
