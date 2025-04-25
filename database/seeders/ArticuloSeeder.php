<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articulo;
use Illuminate\Support\Str;

class ArticuloSeeder extends Seeder
{
    public function run(): void
    {
        $articulos = [
            [
                'id_usuario' => 3, // Cambiado a ID de usuario existente
                'titulo' => 'Beneficios de la dieta BARF para perros',
                'contenido' => 'La dieta BARF (Biologically Appropriate Raw Food) incluye alimentos crudos como carne, huesos y vegetales, promoviendo una mejor digestión y salud general en perros...',
                'slug' => Str::slug('Beneficios de la dieta BARF para perros'),
                'imagen' => 'https://images.unsplash.com/photo-1605464315542-6d7a1dda3e90?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'fecha_publicacion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Cómo equilibrar nutrientes en la alimentación canina',
                'contenido' => 'Una dieta equilibrada para perros debe incluir proteínas, grasas, carbohidratos, vitaminas y minerales en las proporciones adecuadas...',
                'slug' => Str::slug('Cómo equilibrar nutrientes en la alimentación canina'),
                'imagen' => 'https://images.unsplash.com/photo-1597843786411-a7fa8ed2f1f7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'fecha_publicacion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Alimentos tóxicos para perros que debes evitar',
                'contenido' => 'Algunos alimentos como el chocolate, uvas, cebollas y aguacates son tóxicos para los perros y pueden causar problemas graves de salud...',
                'slug' => Str::slug('Alimentos tóxicos para perros que debes evitar'),
                'imagen' => 'dieta-placeholder.png',
                'fecha_publicacion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($articulos as $articulo) {
            Articulo::create($articulo);
        }
    }
}
