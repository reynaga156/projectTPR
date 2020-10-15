<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_documents', function (Blueprint $table) {
            $table->id('sales_document_number');            
            $table->foreignId('order_number_ordered');
            $table->date('sales_document_date');
            $table->decimal('sub_total_price');
            $table->decimal('total_price');
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
        Schema::dropIfExists('sales_documents');
    }
}
