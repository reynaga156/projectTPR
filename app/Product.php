<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'
        
public function purchase_order_details(){
    return $this -> hasMany('App\Purchase_order_detail');
    }
    
public function order_details(){
    return $this -> hasMany('App\Order_detail');
    }
public function categories(){
    return $this -> belongsTo('App\Category', 'category_id');
    }   
}
