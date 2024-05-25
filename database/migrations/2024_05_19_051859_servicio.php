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
        Schema::create('Servicio', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('IdServicio'); //PK
            $table->foreignId('user_id')->constrained('users'); //FK
            $table->bigInteger('IdContenido')->unsigned()->nullable(); //FK
            $table->bigInteger('IdConsulta')->unsigned()->nullable(); //FK
            $table->double('Costo');
            $table->timestamps();
            $table->foreign('IdContenido')->references('IdContenido')->on('ContenidoEdu');
            $table->foreign('IdConsulta')->references('IdConsulta')->on('Consulta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Servicio');
    }
};
