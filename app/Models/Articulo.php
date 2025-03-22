<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = [
        'id_usuario',
        'titulo',
        'slug',
        'contenido',
        'fecha_publicacion',
    ];

    protected $casts = [ //esto mejora el manejo de fechas
        'fecha_publicacion' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }


    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_articulo');
    }
}
