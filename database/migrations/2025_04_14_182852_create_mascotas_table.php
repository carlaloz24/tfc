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
            $table->foreignId('id_usuario')->constrained('users')->onDelete('cascade');
            $table->string('nombre');
            $table->string('categoria_edad');
            $table->decimal('peso', 8, 2);
            $table->string('nivel_actividad');
            $table->boolean('esterilizado');
            $table->string('tipo_dieta_preferida');
            $table->json('condiciones_salud')->nullable();
            $table->json('alimentos_alergia')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
