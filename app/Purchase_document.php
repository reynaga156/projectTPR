<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_document extends Model
{
    protected $table = 'puschase_documents';
    
public function purchase_orders(){
    return this->BelongsTo('App\Purchase_order', 'purchase_order_number');
    }
public function purchase_order_details(){
    return this->hasMany('App\Purchase_order_detail');
    }

}
