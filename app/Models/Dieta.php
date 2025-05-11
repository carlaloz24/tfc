<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected $table = 'dietas';
    protected $fillable = [
        'id_mascota', 'id_usuario', 'calorias', 'tipo_dieta', 'menu_json', 'pdf_dieta', 'fecha_generacion', 'created_at', 'updated_at',
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class, 'id_mascota');
    }
}
