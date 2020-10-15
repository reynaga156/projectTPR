<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    
public function purchase_orders(){
    return this->hasMany('App\Purchase_order');
    }
}
