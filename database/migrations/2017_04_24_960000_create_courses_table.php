<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('course_code');
            $table->string('course_name');
            $table->integer('pass_grade')->default(40);
            $table->float('cw')->default(40);
            $table->float('ue')->default(60);
            $table->timestamps();
        });

        Schema::table('courses', function($table){
            $table->integer('departments_id')->unsigned()->index()->nullable();
            $table->foreign('departments_id')
                    ->references('id')->on('departments')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
