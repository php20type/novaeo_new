<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates')->constrained();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('recruter_job')->constrained();
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('job_questions')->constrained();
            $table->text('answer');
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
        Schema::dropIfExists('candidate_questions');
    }
}
