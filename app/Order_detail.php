<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'order_details';
    
public function sales_documents(){
    return this->belongsTo('App\Sales_document', 'sales_document_number');
    }
public function products(){
    return this->belongsTo('App\Product', 'product_id');
}
