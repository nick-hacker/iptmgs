<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->boolean('show')->default(1);
            $table->integer('post_id')->unsigned()->index()->nullable();
            $table->integer('staffs_id')->unsigned()->index()->nullable();
            $table->timestamps();
        });

        //constrains for table comments
        Schema::table('supervisors', function($table){
            $table->foreign('staffs_id')
                    ->references('id')->on('staffs')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('post_id')
                    ->references('id')->on('posts')
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
        Schema::dropIfExists('supervisors');
    }
}
