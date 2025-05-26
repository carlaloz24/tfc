<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRazaToDietasTable extends Migration
{
    public function up(){
        Schema::table('dietas', function (Blueprint $table) {
            $table->string('raza')->nullable()->after('tipo_dieta');
        });
    }

    public function down(){
        Schema::table('dietas', function (Blueprint $table) {
            $table->dropColumn('raza');
        });
    }
}
