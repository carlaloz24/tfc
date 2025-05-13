<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_mascota',
        'nombre',
        'peso',
        'categoria_edad',
        'esterilizado',
        'nivel_actividad',
        'tipo_dieta',
        'condiciones_salud',
        'alimentos_alergia',
        'menu_json',
        'pdf_url', // Añadido
    ];

    protected $casts = [
        'condiciones_salud' => 'array',
        'alimentos_alergia' => 'array',
        'menu_json' => 'array',
        'esterilizado' => 'boolean',
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class, 'id_mascota');
    }
}
