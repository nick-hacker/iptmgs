<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('college_name');
            $table->string('college_acronym', 20);
            $table->timestamps();
        });

        Schema::table('colleges', function($table){
            $table->integer('institutions_id')->unsigned()->index()->nullable();
            $table->foreign('institutions_id')
                    ->references('id')->on('institutions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        //Adding dummy data
        App\College::create([
        'college_name' => 'Informatics and Virtual Education',
        'college_acronym' => 'CIVE',
        'institutions_id' => 1
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colleges');
    }
}
