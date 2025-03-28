<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
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
    ];

    protected $casts = [
        'peso' => 'decimal:2',
        'esterilizado' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function condiciones()
    {
        return $this->hasMany(CondicionMascota::class, 'id_mascota');
    }

    public function dietas()
    {
        return $this->hasMany(Calculadora::class, 'id_mascota');
    }

    public function planes()
    {
        return $this->hasMany(Plan::class, 'id_mascota');
    }
}
