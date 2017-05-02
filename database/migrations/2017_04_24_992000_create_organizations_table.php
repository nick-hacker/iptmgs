<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_org');
            $table->text('description');
            $table->timestamps();
        });

        Schema::table('organizations', function($table){
            $table->integer('address_id')->unsigned()->index()->nullable();
            $table->foreign('address_id')
                    ->references('id')->on('address')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('locations_id')->unsigned()->index()->nullable();
            $table->foreign('locations_id')
                    ->references('id')->on('locations')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

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
        Schema::dropIfExists('organizations');
    }
}
