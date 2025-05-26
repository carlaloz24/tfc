<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    public function up() {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('mascota_id');
            $table->string('tipo_plan');
            $table->string('frecuencia');
            $table->decimal('precio', 8, 2);
            $table->string('pdf_path');
            $table->timestamp('fecha_emision');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('mascota_id')->references('id')->on('mascotas')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('facturas');
    }
}
