<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLectureSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_subjects', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('lecture_id')->unsigned();
            $table->foreign('lecture_id')->references('id')->on('users');
            
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('courses');
            
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
        Schema::dropIfExists('lecture_subjects');
    }
}
