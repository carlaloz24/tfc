<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model{
    protected $table = 'mascotas';
    protected $fillable = [
        'id_usuario',
        'nombre',
        'raza',
        'categoria_edad',
        'peso',
        'nivel_actividad',
        'esterilizado',
        'tipo_dieta_preferida',
        'condiciones_salud',
        'alimentos_alergia',
    ];
    protected $casts = [
        'esterilizado' => 'boolean',
        'condiciones_salud' => 'array',
        'alimentos_alergia' => 'array',
    ];

    public function dietas()    {
        return $this->hasMany(Dieta::class, 'id_mascota');
    }

    public function plan()    {
        return $this->hasOne(Plan::class, 'id_mascota')->where('activo', 1);
    }

    public function usuario()    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'mascota_id');
    }
}
