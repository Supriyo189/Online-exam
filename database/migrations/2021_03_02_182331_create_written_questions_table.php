<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWrittenQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('written_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->string('mark');
            $table->unsignedBigInteger('quiz_id')->index();
            $table->foreign('quiz_id')->references('id')->on('writtens');
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
        Schema::dropIfExists('written_questions');
    }
}
