<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaProdTable extends Migration
{
    public function up()
    {
        Schema::create('CATEGORIA_PROD', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('NOMBRE_CAT', 50);
            $table->text('DESCRIPCION')->nullable();
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('CATEGORIA_PROD');
    }
}
