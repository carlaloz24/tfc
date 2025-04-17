<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'correo', 'contraseña', 'is_admin'];
    protected $hidden = ['contraseña', 'remember_token'];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'contraseña' => 'hashed',
    ];

    public function mascotas()
    {
        return $this->hasMany(Mascota::class, 'id_usuario');
    }

    public function articulos()
    {
        return $this->hasMany(Articulo::class, 'id_usuario');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_usuario');
    }

    public function planes()
    {
        return $this->hasMany(Plan::class, 'id_usuario');
    }
}
