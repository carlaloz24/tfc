<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    protected $table = 'dietas';
    protected $fillable = [
        'id_mascota',
        'calorias',
        'tipo_dieta',
        'menu_json',
    ];

    protected $casts = [
        'calorias' => 'decimal:2',
        'menu_json' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class, 'id_mascota');
    }
}
