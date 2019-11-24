<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Receta;
use Faker\Generator as Faker;

$factory->define(Receta::class, function (Faker $faker) {

  $path = storage_path('\app\public\productos');
    return [
      'titulo' => $faker -> sentence(3),
      'ingredientes' => $faker -> sentence(10),
      'materiales' => $faker -> sentence(10),
      'preparacion' => $faker -> paragraph(3),
      'foto_producto' => $faker -> image($path, 300, 300, 'food', false)
    ];
});
