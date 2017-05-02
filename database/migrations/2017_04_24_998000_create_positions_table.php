<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('Supervisor');
            $table->text('description')->nullable();
            $table->boolean('show')->default(1);
            $table->integer('posts_id')->unsigned()->index()->nullable();
            $table->integer('users_id')->unsigned()->index()->nullable();
            $table->timestamps();
        });


        //constrains for table comments
        Schema::table('positions', function($table){
            $table->foreign('users_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
/*
            $table->foreign('posts_id')
                    ->references('id')->on('posts')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
