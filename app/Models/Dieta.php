<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected $fillable = [
        'id_mascota',
        'id_usuario',
        'calorias',
        'tipo_dieta',
        'menu_json',
        'pdf_dieta',
        'fecha_generacion',
    ];

    protected $casts = [
        'menu_json' => 'array',
        'fecha_generacion' => 'date',
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class, 'id_mascota');
    }
}
