<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id('provider_id');
            $table->integer('id_card');
            $table->string('provider_names');
            $table->string('last_name_provider');
            $table->string('gender');
            $table->date('birthdate');
            $table->text('direction');
            $table->integer('cellPhone');
            $table->integer('phone');            
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
        Schema::dropIfExists('providers');
    }
}
