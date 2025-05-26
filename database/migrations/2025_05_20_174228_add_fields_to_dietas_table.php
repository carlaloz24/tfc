<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToDietasTable extends Migration
{
    public function up(){
        Schema::table('dietas', function (Blueprint $table) {
            $table->string('nombre')->nullable()->after('fecha_generacion');
            $table->decimal('peso', 8, 2)->nullable()->after('nombre');
            $table->string('categoria_edad')->nullable()->after('peso');
            $table->boolean('esterilizado')->nullable()->after('categoria_edad');
            $table->string('nivel_actividad')->nullable()->after('esterilizado');
            $table->json('condiciones_salud')->nullable()->after('nivel_actividad');
            $table->json('alimentos_alergia')->nullable()->after('condiciones_salud');
        });
    }

    public function down(){
        Schema::table('dietas', function (Blueprint $table) {
            $table->dropColumn([
                'nombre',
                'peso',
                'categoria_edad',
                'esterilizado',
                'nivel_actividad',
                'condiciones_salud',
                'alimentos_alergia'
            ]);
        });
    }
}
