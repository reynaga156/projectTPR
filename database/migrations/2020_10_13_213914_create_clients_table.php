<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('client_id');
            $table->integer('id_card');
            $table->string('client_names');
            $table->string('last_name_cliente');
            $table->string('gender');
            $table->date('birthdate');
            $table->text('direction');
            $table->integer('cellPhone');
            $table->string('marital_status');            
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
        Schema::dropIfExists('clients');
    }
}
