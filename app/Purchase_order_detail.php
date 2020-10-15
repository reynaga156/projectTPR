<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_order_detail extends Model
{
    protected $table = 'purchase_order_details';
    
public function purchase_documents(){
    return this->belongsTo('App\Purchase_document', 'purchase_document_number');
    }
public function products(){
    return this->belongsTo('App\Product', 'id_product');
    }
}
