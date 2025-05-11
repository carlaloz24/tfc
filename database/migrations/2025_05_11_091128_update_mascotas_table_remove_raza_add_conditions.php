<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMascotasTableRemoveRazaAddConditions extends Migration
{
    public function up()
    {
        Schema::table('mascotas', function (Blueprint $table) {
            $table->dropColumn('raza');
            $table->json('condiciones_salud')->nullable()->after('tipo_dieta_preferida');
            $table->json('alimentos_alergia')->nullable()->after('condiciones_salud');
        });
    }

    public function down()
    {
        Schema::table('mascotas', function (Blueprint $table) {
            $table->string('raza')->nullable();
            $table->dropColumn(['condiciones_salud', 'alimentos_alergia']);
        });
    }
}
