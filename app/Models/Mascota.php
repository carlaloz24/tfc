<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';
    protected $fillable = [
        'id_usuario', 'nombre', 'raza', 'categoria_edad', 'peso',
        'nivel_actividad', 'esterilizado', 'tipo_dieta_preferida'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario'); // Cambiado de Usuario a User
    }

    public function condiciones()
    {
        return $this->hasMany(CondicionMascota::class, 'id_mascota');
    }

    public function dietas()
    {
        return $this->hasMany(Dieta::class, 'id_mascota');
    }

    public function planes()
    {
        return $this->hasMany(Plan::class, 'id_mascota');
    }
}
