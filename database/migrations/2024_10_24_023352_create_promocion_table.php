<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocionTable extends Migration
{
    public function up()
    {
        Schema::create('PROMOCION', function (Blueprint $table) {
            $table->bigIncrements('ID_PROMOCION');
            $table->text('DESCRIPCION')->nullable();
            $table->bigInteger('ID_PRODUCTO')->unsigned()->nullable();
            $table->dateTime('FECHA_IN')->nullable();
            $table->dateTime('FECHA_FIN')->nullable();
            $table->foreign('ID_PRODUCTO')->references('ID')->on('PRODUCTO')->onDelete('cascade');
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('PROMOCION');
    }
}
