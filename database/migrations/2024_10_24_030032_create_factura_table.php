<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('FACTURA', function (Blueprint $table) {
            $table->id('ID_FACTURA');
            $table->dateTime('FECHA');
            $table->decimal('TOTAL', 10, 2);
            $table->bigInteger('CED_USUARIO')->unsigned()->nullable(); // Debe ser igual en tipo y propiedad
            $table->foreign('CED_USUARIO')->references('CEDULA')->on('USUARIO')->onDelete('cascade');
            $table->bigInteger('CED_CLIENTE')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('FACTURA');
    }
};
