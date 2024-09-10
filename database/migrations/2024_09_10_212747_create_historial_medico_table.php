<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('historial_medico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mascota_id');
            $table->unsignedBigInteger('servicio_id');
            $table->string('tipo_vacuna')->nullable();
            $table->text('receta')->nullable();
            $table->decimal('peso', 5, 2)->nullable();
            $table->date('proximas_visitas')->nullable();
            $table->text('notas_adicionales')->nullable();
            $table->text('examenes')->nullable();
            $table->string('archivo_adjuntos')->nullable();
            $table->date('fecha');
            $table->unsignedBigInteger('user_id');

            $table->date('fecha_proxima_vacuna')->nullable();
            $table->boolean('notificacion_enviada')->default(false);

            $table->timestamps();

            $table->foreign('mascota_id')->references('id')->on('mascotas')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_medico');
    }
};
