<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table = 'personnels'
        
public function order_orders(){
    return this->hasMany('App\Order_ordered');
    }
public function purchase_orders(){
    return this->hasMany('App\Purchase_order');
    }
public function roles(){
    return this->belongsTo('App\Role', 'role_id');
    }
        
}
