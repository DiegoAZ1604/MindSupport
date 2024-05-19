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
        Schema :: create('ContenidoEdu', function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> bigIncrements('IdContenido'); //PK
            $table->foreignId('user_id')->constrained('users'); //FK
            $table -> string('Titulo', 100);
            $table -> string('Descripcion', 1000);
            $table -> enum('TipoContenido', ['texto', 'audio', 'video', 'enlace']); //This column defines the type of content stored in the Contenido column (text, audio, video, or enlace).
            $table -> longText('Contenido');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
