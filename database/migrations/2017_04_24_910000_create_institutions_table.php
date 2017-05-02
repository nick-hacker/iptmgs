<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institution_name');
            $table->string('institution_acronym', 100);
            $table->timestamps();
        });

        //Adding dummy data
        App\Institution::create([
            'institution_name' => 'University Of Dodoma',
            'institution_acronym' => 'UDOM'
            ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
