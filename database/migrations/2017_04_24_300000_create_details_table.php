<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firs_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('surname', 50)->nullable();
            $table->char('gender', 1);
            $table->string('image_url')->nullable();
            $table->timestamps();
        });

        Schema::table('details', function($table){
            $table->integer('address_id')->unsigned()->index()->nullable();
            $table->foreign('address_id')
                    ->references('id')->on('address')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('user_id')->unsigned()->index()->nullable();
        });

    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
