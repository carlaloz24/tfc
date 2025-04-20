<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articulos'; // Apunta a la tabla 'articulos'

    protected $fillable = [
        'titulo',
        'contenido',
        'imagen',
        'fecha_publicacion',
    ];

    protected $dates = ['fecha_publicacion'];
}
