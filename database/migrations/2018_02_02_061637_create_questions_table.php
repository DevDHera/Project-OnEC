<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            
            $table->integer('exampprid')->unsigned();
            $table->integer('id')->unsigned()->unique();
            //$table->integer('qno')->unsigned();
            $table->mediumText('question');
            $table->integer('noans')->unsigned();
            $table->timestamps();

            $table->primary(['id', 'exampprid']);

            $table->foreign('exampprid')->references('id')->on('exam_papers');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
