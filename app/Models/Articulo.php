<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulos';

    protected $fillable = [
        'id_usuario',
        'titulo',
        'slug',
        'contenido',
        'imagen',
        'fecha_publicacion',
    ];

    protected $dates = ['fecha_publicacion', 'created_at', 'updated_at'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
