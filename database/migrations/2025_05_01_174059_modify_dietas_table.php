<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDietasTable extends Migration
{
    public function up()
    {
        Schema::table('dietas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario')->after('id');
            $table->binary('pdf_dieta')->nullable()->after('id_usuario');
            $table->date('fecha_generacion')->after('pdf_dieta');
            $table->unsignedBigInteger('id_mascota')->nullable()->change();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('dietas', function (Blueprint $table) {
            $table->dropForeign(['id_usuario']);
            $table->dropColumn(['id_usuario', 'pdf_dieta', 'fecha_generacion']);
            $table->unsignedBigInteger('id_mascota')->nullable(false)->change();
        });
    }
}
