<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('planes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mascota')->after('id');
            $table->string('tipo')->after('id_mascota');
            $table->string('frecuencia')->after('tipo');
            $table->foreign('id_mascota')->references('id')->on('mascotas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('planes', function (Blueprint $table) {
            $table->dropForeign(['id_mascota']);
            $table->dropColumn(['id_mascota', 'tipo', 'frecuencia']);
        });
    }
};
