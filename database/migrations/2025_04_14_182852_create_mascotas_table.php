<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->string('nombre');
            $table->string('raza')->nullable();
            $table->enum('categoria_edad', ['cachorro_menor_4', 'cachorro_mayor_4', 'adulto', 'senior']);
            $table->decimal('peso', 5, 2);
            $table->enum('nivel_actividad', ['baja', 'moderada', 'alta']);
            $table->boolean('esterilizado');
            $table->enum('tipo_dieta_preferida', ['barf', 'cocida', 'mixta_50', 'mixta_70']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
