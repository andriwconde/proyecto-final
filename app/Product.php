<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $fillable=[];

    public function menu(){
      return $this->belongsTo(menu::class, 'menu_id');
    }

    // function para traer todos el menu al cual pertenece un producto
    // repasar hasMany y belongsTo
}
