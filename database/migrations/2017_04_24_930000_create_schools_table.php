<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\School;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('school_acronym', 20);            
            $table->integer('colleges_id')->unsigned()->index()->nullable();
            $table->timestamps();
        });
        Schema::table('schools', function($table){
            $table->foreign('colleges_id')
                    ->references('id')->on('colleges')
                    ->onUpdate('cascade');
        });

        //Creatin dummy data
        School::create([
            'school_name' => 'Informatics',
            'school_acronym' => 'Sch.Info',
            'colleges_id' => 1,
            ]);

        School::create([
            'school_name' => 'Virtual Education',
            'school_acronym' => 'Sch.VE',
            'colleges_id' => 1,
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
