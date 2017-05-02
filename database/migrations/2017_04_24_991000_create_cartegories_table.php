<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartegoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartegories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->text('description')->nullable();
            $table->timestamps();
        });

         Schema::table('cartegories', function($table){
            $table->integer('users_id')->unsigned()->index()->nullable();
            $table->foreign('users_id')
                    ->references('id')->on('users')
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
        Schema::dropIfExists('cartegories');
    }
}
