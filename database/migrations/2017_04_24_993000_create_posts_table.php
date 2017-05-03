<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_post');
            $table->text('description');
            $table->string('post_criteria')->nullable();
            $table->timestamps();
        });

         Schema::table('posts', function($table){
            
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('org_id')->unsigned()->index()->nullable();
            $table->foreign('org_id')
                    ->references('id')->on('organizations')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('cartegory_id')->unsigned()->index()->nullable();
            $table->foreign('cartegory_id')
                    ->references('id')->on('cartegories')
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
        Schema::dropIfExists('posts');
    }
}
