<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model{
    protected $table = 'planes';
    protected $fillable = [
        'id_usuario', 'id_mascota', 'tipo_plan', 'frecuencia', 'activo',
    ];
    protected $casts = [
        'activo' => 'boolean',
    ];

    public function usuario() {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function mascota() {
        return $this->belongsTo(Mascota::class, 'id_mascota');
    }
}
