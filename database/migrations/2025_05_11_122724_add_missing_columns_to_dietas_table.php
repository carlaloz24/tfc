<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingColumnsToDietasTable extends Migration
{
    public function up()
    {
        Schema::table('dietas', function (Blueprint $table) {
            $table->integer('calorias')->after('id_usuario');
            $table->string('tipo_dieta')->after('calorias');
            $table->json('menu_json')->after('tipo_dieta');
        });
    }

    public function down()
    {
        Schema::table('dietas', function (Blueprint $table) {
            $table->dropColumn(['calorias', 'tipo_dieta', 'menu_json']);
        });
    }
}
