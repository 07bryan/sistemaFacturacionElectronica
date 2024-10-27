<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescuentoTable extends Migration
{
    public function up()
    {
        Schema::create('DESCUENTO', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->bigInteger('ID_CATEGORIA')->unsigned()->nullable();
            $table->float('PORCENTAJE');
            $table->dateTime('FECHA_IN')->nullable();
            $table->dateTime('FECHA_FIN')->nullable();
            $table->foreign('ID_CATEGORIA')->references('ID')->on('CATEGORIA_PROD')->onDelete('cascade');
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('DESCUENTO');
    }
}
