<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factura_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('revisor_id')->nullable();
            $table->double('monto');
            $table->string('metodo_pago');
            $table->timestamp('fecha_pago');
            $table->string('estado')->default('PENDIENTE');
            $table->string('estado_revision')->default('NO_REVISADO');
            $table->timestamps();

            $table->foreign('factura_id')->references('id')->on('facturas')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('revisor_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};
