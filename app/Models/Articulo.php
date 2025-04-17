<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = ['id_usuario', 'titulo', 'slug', 'contenido', 'imagen', 'fecha_publicacion'];
    protected $casts = [
        'fecha_publicacion' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
