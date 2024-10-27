<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    public function up()
    {
        Schema::create('PRODUCTO', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('NOMBRE', 30);
            $table->integer('TIPO')->nullable();
            $table->integer('STOCK')->nullable();
            $table->text('DESCRIPCION')->nullable();
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('PRODUCTO');
    }
}
