<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_documents', function (Blueprint $table) {
            $table->id('purchase_document_number');            
            $table->foreignId('purchase_order_number');
            $table->date('purchase_document_date');
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
        Schema::dropIfExists('purchase_documents');
    }
}
