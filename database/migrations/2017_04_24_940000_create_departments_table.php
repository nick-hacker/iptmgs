<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Department;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department_name');
            $table->string('department_acronym');
            $table->timestamps();
        });

        Schema::table('departments', function($table){
           $table->integer('schools_id')->unsigned()->index()->nullable();
            $table->foreign('schools_id')
                    ->references('id')->on('schools')
                    ->onDelete('cascade')
                    ->onUpdate('cascade'); 
        });

        Department::create([
            'department_name' => 'Informatics',
            'department_acronym' => 'Informatics',
            'schools_id' => 1,
        ]);

        Department::create([
            'department_name' => 'Telecommunications',
            'department_acronym' => 'Informatics',
            'schools_id' => 2,
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
