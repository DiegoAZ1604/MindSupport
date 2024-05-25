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
        Schema::create('Calificacion', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('IdCalificacion'); //PK
            $table->bigInteger('IdServicio')->unsigned(); //FK
            $table->double('Puntuacion');            
            $table->string('Comentario', 1000);
            $table->timestamps();
            $table->foreign('IdServicio')->references('IdServicio')->on('Servicio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Calificacion');
    }
};
