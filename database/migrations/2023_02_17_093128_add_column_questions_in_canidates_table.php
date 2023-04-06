<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnQuestionsInCanidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidates', function (Blueprint $table) {
            //
            $table->string('question1')->nullable();
            $table->string('question2')->nullable();
            $table->text('question3')->nullable();
            $table->text('question4')->nullable();
            $table->text('question5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidates', function (Blueprint $table) {
            //
            $table->dropColumn('question1');
            $table->dropColumn('question2');
            $table->dropColumn('question3');
            $table->dropColumn('question4');
            $table->dropColumn('question5');


        });
    }
}
