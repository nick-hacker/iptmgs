<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('email', 191)->unique()->nullable();
            $table->rememberToken();
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::table('users', function($table){
            $table->integer('address_id')->unsigned()->index()->nullable();
            $table->foreign('address_id')
                    ->references('id')->on('address')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('details_id')->unsigned()->index()->nullable();
            $table->foreign('details_id')
                    ->references('id')->on('details')
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
        Schema::dropIfExists('users');
    }
}
