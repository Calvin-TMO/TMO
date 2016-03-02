<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department');
            $table->string('number');
            $table->string('description')->unique();
            $table->timestamps();
        });

        Schema::create('available_tutors', function (Blueprint $table) {
            $table->integer('course_id');
            $table->integer('user_id');
        });

        Schema::create('current_professors', function (Blueprint $table) {
            $table->integer('course_id');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courses');
        Schema::drop('available_tutors');
        Schema::drop('current_professors');
    }
}
