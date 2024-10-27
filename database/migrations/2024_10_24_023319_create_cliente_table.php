<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    public function up()
    {
        Schema::create('CLIENTE', function (Blueprint $table) {
            $table->bigInteger('CEDULA')->primary();
            $table->string('NOMBRE', 30);
            $table->bigInteger('TELEFONO')->nullable();
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('CLIENTE');
    }
}
