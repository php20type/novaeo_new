<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->constrained();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('recruter_job')->constrained();
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('country')->nullable();
            $table->string('experience')->nullable();
            $table->text('profile_link')->nullable();
            $table->text('resume')->nullable();
            $table->text('portfolio')->nullable();
            $table->text('profile')->nullable();
            $table->unsignedInteger('status')->nullable()->default(0);
            $table->unsignedInteger('result')->nullable()->default(0);
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
        Schema::dropIfExists('candidates');
    }
}
