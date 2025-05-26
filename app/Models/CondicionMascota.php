<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CondicionMascota extends Model{
    protected $table = 'condiciones_mascotas';
    protected $fillable = ['id_mascota', 'condicion', 'alimento_alergia'];

    public function mascota()    {
        return $this->belongsTo(Mascota::class, 'id_mascota');
    }
}
