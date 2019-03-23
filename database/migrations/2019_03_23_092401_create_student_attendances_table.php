<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('checkin_time')->useCurrent();
            $table->timestamp('checkout_time')->nullable();

            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users');
            
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');

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
        Schema::dropIfExists('student_attendances');
    }
}
