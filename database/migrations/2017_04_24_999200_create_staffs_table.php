<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_salutation', 30);
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });

        Schema::table('staffs', function($table){
            
            $table->integer('details_id')->unsigned()->index()->nullable();
            $table->foreign('details_id')
                ->references('id')->on('details')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('departments_id')->unsigned()->index()->nullable();
            $table->foreign('departments_id')
                ->references('id')->on('departments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('positions_id')->unsigned()->index()->nullable();
            $table->foreign('positions_id')
                    ->references('id')->on('positions')
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
        Schema::dropIfExists('staffs');
    }
}
