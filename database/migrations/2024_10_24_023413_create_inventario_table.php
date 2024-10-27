<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioTable extends Migration
{
    public function up()
    {
        Schema::create('INVENTARIO', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->bigInteger('ID_PRODUCTO')->unsigned();
            $table->integer('CANTIDAD');
            $table->bigInteger('ID_CATEG')->unsigned()->nullable();
            $table->foreign('ID_PRODUCTO')->references('ID')->on('PRODUCTO')->onDelete('cascade');
            $table->foreign('ID_CATEG')->references('ID')->on('CATEGORIA_PROD')->onDelete('cascade');
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('INVENTARIO');
    }
}
