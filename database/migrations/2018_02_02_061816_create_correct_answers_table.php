<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrectAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correct_answers', function (Blueprint $table) {
            
            $table->integer('exampprid')->unsigned();            
            $table->integer('questionid')->unsigned();
            $table->integer('answerid')->unsigned(); 
            $table->timestamps();

            $table->primary(['exampprid', 'questionid', 'answerid']);

            $table->foreign('exampprid')->references('id')->on('exam_papers');
            $table->foreign('questionid')->references('id')->on('questions');
            $table->foreign('answerid')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('correct_answers');
    }
}
