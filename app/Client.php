<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
protected $table = 'clients';
    
    public function order_orders(){
        return this->hasMany('App\Order_ordered');
    }
    
}
