<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_ordered extends Model
{
    protected $table = 'order_ordereds'
        
public function clients(){
    return this->belongsTo('App\Client', 'client_id');
    }
public function personnels(){
    return this->belongsTo('App\Personnel', 'personnel_id');
    }
public function sales_documents(){
    return this->hasMany('App\Sales_document');
    }
}
