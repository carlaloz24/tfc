<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('dietas', function (Blueprint $table) {
            $table->bigInteger('id_mascota')->unsigned()->after('id');
            $table->foreign('id_mascota')->references('id')->on('mascotas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('dietas', function (Blueprint $table) {
            $table->dropForeign(['id_mascota']);
            $table->dropColumn('id_mascota');
        });
    }
};
