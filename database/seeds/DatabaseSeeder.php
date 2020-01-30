<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use App\Role;
use App\Menu;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $menues = array(
        [
        "name" => "Vegano"
        ],
        [
          "name" => "Postres"
        ]
      );

      
      foreach ($menues as $menu) {
        Menu::insert($menu);
      }

      $roles = array(
        [
        "status" => "User"
        ],
        [
          "status" => "Admin"
        ]
      );
      foreach ($roles as $role) {
        Role::insert($role);
      }
    // $this->call(SeederPrueba::class);

   }
}
