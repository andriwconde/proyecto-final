<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $rolls = [
        [
          'title' => ' ' ,
          'description' => ' '
        ],
      ];
      foreach ($rolls as $rol) {
        DB::table('rolls')->insert($rol);
      }
   }
}
