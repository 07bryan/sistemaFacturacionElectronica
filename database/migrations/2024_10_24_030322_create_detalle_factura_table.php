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
        Schema::create('DETALLE_FACTURA', function (Blueprint $table) {
            $table->id(); // ID único para cada detalle de factura
            $table->foreignId('ID_FACTURA') // Clave foránea que referencia a la factura
                  ->constrained('FACTURA')
                  ->onDelete('cascade'); // Elimina los detalles si se elimina la factura
            $table->foreignId('ID_PRODUCTO') // Clave foránea que referencia al producto
                  ->constrained('PRODUCTO')
                  ->onDelete('cascade'); // Elimina los detalles si se elimina el producto
            $table->integer('CANTIDAD'); // Cantidad del producto en la factura
            $table->decimal('PRECIO_UNITARIO', 10, 2); // Precio unitario del producto
            $table->decimal('SUBTOTAL', 10, 2); // Subtotal (CANTIDAD * PRECIO_UNITARIO)
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DETALLE_FACTURA');
    }
};
