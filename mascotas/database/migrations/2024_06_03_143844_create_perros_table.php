<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('perros', function (Blueprint $table) {
            $table->id();
            $table->string('nick', 100)->unique();
            $table->string('password', 100);
            $table->string('nombre', 250);
            $table->enum('raza', ['Boxer', 'Buldog', 'Labrador', 'Caniche']);
            $table->enum('sexo', ['macho', 'hembra']);
            $table->integer('edad');
            $table->string('color', 200);
            $table->string('nombreHumano', 250);
            $table->string('telefono', 9);
            $table->string('foto', 250);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perros');
    }
};
