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
        Schema::create('ideas', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Imagen');
            $table->string('Titulo_Idea');
            $table->string('Descripcion');
            $table->unsignedBigInteger('Id_Categoria');
            $table->foreign('Id_Categoria')->references('Id')->on('categorias');
            $table->unsignedBigInteger('Id_Usuario');
            $table->foreign('Id_Usuario')->references('Id')->on('users');
            $table->unsignedBigInteger('Id_Tablero');
            $table->foreign('Id_Tablero')->references('Id')->on('tableros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideas');
    }
};
