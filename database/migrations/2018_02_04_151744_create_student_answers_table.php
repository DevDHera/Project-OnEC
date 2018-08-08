<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_answers', function (Blueprint $table) {
            $table->integer('exampprid')->unsigned();            
            $table->integer('questionid')->unsigned();
            $table->integer('stuanswerid')->unsigned(); 
            $table->timestamps();

            $table->primary(['exampprid', 'questionid']);

            $table->foreign('exampprid')->references('id')->on('exam_papers');
            $table->foreign('questionid')->references('id')->on('questions');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_answers');
    }
}
