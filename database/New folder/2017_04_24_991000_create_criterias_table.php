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
        Schema::create('criterias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120)->nullable();
            $table->text('description')->nullable();
            $table->text('others')->nullable();
            $table->timestamps();
        });

         Schema::table('criterias', function($table){
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')
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
