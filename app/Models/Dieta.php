<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected $table = 'dietas';
    protected $fillable = ['id_mascota', 'calorias', 'tipo_dieta', 'menu_json'];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class, 'id_mascota');
    }
}
