<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('USUARIO', function (Blueprint $table) {
            $table->bigIncrements('CEDULA'); 
            $table->string('NOMBRE', 30);
            $table->integer('ROL');
            $table->dateTime('FECHA_CREACION')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('USUARIO');
    }
}
