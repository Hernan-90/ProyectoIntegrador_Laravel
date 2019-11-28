<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->decimal('price', 10, 2);
            $table->string('description', 300);
            $table->string('picture', 300);
            // $table->integer('cant');
            $table->bigInteger('user_id')->unsigned();
            $table->smallInteger('estadoCompra')->default(0);
            $table->bigInteger('carritoNumero')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
