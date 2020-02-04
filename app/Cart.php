<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id','product_id'];

    //protected $table = 'carts';

    public function user(){

      return $this->belongsTo('App\User');

    }

    public function products(){

      return $this->belongsToMany('App\Product')->withPivot('product_qty');
      // Solo a un product se le podra pedir: $product->pivot->product_qty
      
    }

}
