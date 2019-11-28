<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {

    $path = storage_path('app/public/productos');

    return [
      'nombreproducto' => $faker-> sentence(3),
      'precio1' => $faker->randomFloat(2, 10, 50),
      'precio2' => $faker->randomFloat(2, 50, 100),
      'categoria_id' => $faker-> numberBetween(0,4),
      'descripcion' => $faker-> paragraph(3),
      'destacado' => 0,
      'imagen' => $faker-> image($path, 300, 300, 'food', false),
      'ingredientes' => $faker-> sentence(10),
    ];
});
