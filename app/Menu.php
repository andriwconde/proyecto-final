<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
      protected $fillable = ['name'];

      public function products(){
        return $this->hasMany(product::class, 'menu_id');
      }

}
