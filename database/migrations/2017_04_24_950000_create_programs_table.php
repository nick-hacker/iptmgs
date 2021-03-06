<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Program;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('program_code', 30)->nullable();
            $table->string('program_name')->nullable();
            $table->string('program_acronym', 20)->nullable();
            $table->integer('weight')->nullable();
            $table->integer('program_years')->nullable();
            $table->string('program_type')->nullable();
            
            $table->timestamps();
        });

        Schema::table('programs', function($table){
            $table->integer('departments_id')->unsigned()->index()->nullable();
            $table->foreign('departments_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
        });

         Program::create([
            'program_code' => 'BSc',
            'program_name' => 'Software Engineering',
            'program_acronym' => 'SE',
            'program_years' => 4,
            'departments_id' => 1,
        ]);

        Program::create([
            'program_code' => 'BSc',
            'program_name' => 'Telecommunication Engineering',
            'program_acronym' => 'TE',
            'program_years' => 4,
            'departments_id' => 2,
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
