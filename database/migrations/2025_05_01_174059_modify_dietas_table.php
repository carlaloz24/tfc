<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDietasTable extends Migration
{
    public function up()
    {
        Schema::table('dietas', function (Blueprint $table) {
            if (!Schema::hasColumn('dietas', 'id_usuario')) {
                $table->unsignedBigInteger('id_usuario')->after('id');
                $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            }
            if (!Schema::hasColumn('dietas', 'pdf_dieta')) {
                $table->binary('pdf_dieta')->nullable()->after('id_usuario');
            }
            if (!Schema::hasColumn('dietas', 'fecha_generacion')) {
                $table->date('fecha_generacion')->after('pdf_dieta');
            }
        });
    }

    public function down()
    {
        Schema::table('dietas', function (Blueprint $table) {
            if (Schema::hasColumn('dietas', 'id_usuario')) {
                $table->dropForeign(['id_usuario']);
                $table->dropColumn('id_usuario');
            }
            if (Schema::hasColumn('dietas', 'pdf_dieta')) {
                $table->dropColumn('pdf_dieta');
            }
            if (Schema::hasColumn('dietas', 'fecha_generacion')) {
                $table->dropColumn('fecha_generacion');
            }
        });
    }
}
