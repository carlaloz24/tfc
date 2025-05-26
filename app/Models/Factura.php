<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model{
    protected $fillable = [
        'user_id', 'mascota_id', 'tipo_plan', 'frecuencia', 'precio', 'pdf_path', 'fecha_emision',
    ];

    protected $casts = [
        'fecha_emision' => 'datetime',
    ];

    public function user()    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mascota()    {
        return $this->belongsTo(Mascota::class);
    }
}
