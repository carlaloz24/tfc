<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';
    protected $fillable = [
        'id_articulo',
        'id_usuario',
        'contenido',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'id_articulo');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
