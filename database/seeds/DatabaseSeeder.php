<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      factory(\App\Producto::class,10)->create();
      factory(\App\Receta::class,5)->create();
    }

    DB::table("users")->insert(
      [
        "name" => "admin",
        "email" => "admin@admin.com",
        "password" => bcrypt("admin123"),
        "rol" => 1,
      ]
    );
}
