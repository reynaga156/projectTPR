<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id('personnel_id');
            $table->foreignId('role_id');
            $table->integer('identity_card');
            $table->string('personnel_names');
            $table->string('last_name_personnel');
            $table->string('marital_status'); 
            $table->string('gender');
            $table->date('birthdate');
            $table->text('direction');
            $table->string('cellPhone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
}
