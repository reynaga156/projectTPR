<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_document extends Model
{
     protected $table = 'sales_documents';
    
public function order_ordereds(){
    return this->belongsTo('App\Order_ordered', 'order_number_ordered');
    }
public function order_details(){
    return this->hasMany('App\Order_detail');
    }
}
