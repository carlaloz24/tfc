<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('contraseña');
            $table->boolean('is_admin')->default(false);
            $table->timestamps();
        });
    }

//    public function down(): void
//    {
//        Schema::dropIfExists('usuarios');
//    }
};
