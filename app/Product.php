<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $fillable=['name', 'price', 'description','menu_id','image'];

    public function menu(){
      return $this->belongsTo('App\Menu', 'menu_id');
    }

    public function carts(){

      return $this->belongsToMany('App\Cart');
      
    }

    // function para traer todos el menu al cual pertenece un producto
    // repasar hasMany y belongsTo
}
