<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_code');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('No Action')->onDelete('No Action');
            $table->unsignedBigInteger('examtype_id');
            $table->foreign('examtype_id')->references('id')->on('examtypes')->onUpdate('No Action')->onDelete('No Action');
            $table->string('course_title');
            $table->string('course_code');
            $table->integer('number_of_question');
            $table->string('unique_id');
            $table->string('time');


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
        Schema::dropIfExists('exam_infos');
    }
}
