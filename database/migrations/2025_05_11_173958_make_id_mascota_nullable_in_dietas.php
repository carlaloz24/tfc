<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::table('dietas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mascota')->nullable()->change();
        });
    }

    public function down()
    {
        // Primero, actualiza los valores NULL a un valor por defecto (por ejemplo, 0)
        DB::table('dietas')->whereNull('id_mascota')->update(['id_mascota' => 0]);

        Schema::table('dietas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mascota')->nullable(false)->change();
        });
    }
};
