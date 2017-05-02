<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_no', 100)->unique();
            $table->string('form4_index_no', 100)->unique();
            $table->string('form6_index_no', 100)->unique()->nullable();
            $table->date('admission_date')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('place_of_residence')->nullable();
            $table->string('mailing_address')->nullable();
            $table->string('email_address')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('sponsorship')->nullable();
            $table->string('citizenship')->nullable();
            $table->timestamps();
        });

        Schema::table('staff', function($table){
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')
                    ->references('id')->on('users')->onDelete('cascade')
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
        Schema::dropIfExists('students');
    }
}
