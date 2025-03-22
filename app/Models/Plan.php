<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';
    protected $fillable = [
        'id_usuario',
        'id_mascota',
        'tipo_plan',
        'frecuencia',
        'activo',
    ];

    protected $casts = [
        'activo' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function mascota()
    {
        return $this->belongsTo(Mascota::class, 'id_mascota');
    }
}
