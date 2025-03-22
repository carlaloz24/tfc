<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'correo', 'contraseña'];
    protected $hidden = ['contraseña', 'remember_token'];

    public function getAuthIdentifierName()
    {
        return 'correo'; // Esto le dice a Laravel que use 'correo' en lugar de 'email'
    }

    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'contraseña' => 'hashed',
        ];
    }
}
