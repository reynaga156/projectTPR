<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_order extends Model
{
    protected $table = 'Purchase_orders';
    
public function personels(){
    return this->belongsTo('App\Personnel', 'personnel_id');
    }
public function providers(){
    return this->belongsTo('App\Provider', 'provider_id');
    }
public function purchase_documents(){
    return this->hasMany('App\Purchase_document');
    }    
}
