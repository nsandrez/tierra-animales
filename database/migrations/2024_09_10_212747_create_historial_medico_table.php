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

            // Definimos las claves foráneas
            $table->unsignedBigInteger('mascota_id');
            $table->unsignedBigInteger('servicio_id');
            $table->unsignedBigInteger('user_id');

            // Otros campos de la tabla
            $table->string('tipo_vacuna')->nullable();
            $table->text('receta')->nullable();
            $table->decimal('peso', 5, 2)->nullable();
            $table->date('proximas_visitas')->nullable();
            $table->text('notas_adicionales')->nullable();
            $table->text('examenes')->nullable();
            $table->string('archivo_adjuntos')->nullable();
            $table->date('fecha');
            $table->date('fecha_proxima_vacuna')->nullable();
            $table->boolean('notificacion_enviada')->default(false);

            $table->timestamps();

            // Relaciones
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
