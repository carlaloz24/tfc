<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';

//    protected $fillable = [
//        'nombre', 'correo', 'contraseña', 'is_admin',
//    ];


    protected $fillable = [
        'nombre', 'correo', 'contraseña', 'is_admin', 'is_disabled',
    ];


    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    public function getAuthPassword() {
        return $this->contraseña;
    }

    public function mascotas() {
        return $this->hasMany(Mascota::class, 'id_usuario');
    }

    public function facturas(){
        return $this->hasMany(Factura::class, 'user_id');
    }
}
