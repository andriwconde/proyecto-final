<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
      protected $fillable = ['name'];

      // function para traer todos los producto de un menu
      // repasar hasMany y belongsTo
}
