<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            
            $table->integer('exampprid')->unsigned();            
            $table->integer('questionid')->unsigned();
            $table->integer('id')->unsigned()->unique();
            //$table->integer('ano')->unsigned();
            $table->mediumText('answer');            
            $table->timestamps();

            $table->primary(['id', 'exampprid', 'questionid']);

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
        Schema::dropIfExists('answers');
    }
}
