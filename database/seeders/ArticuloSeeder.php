<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articulo;
use Illuminate\Support\Str;

class ArticuloSeeder extends Seeder
{
    public function run(): void
    {
        $contenido = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu sapien bibendum, cursus orci id, dignissim metus. Integer ut sodales augue. Aliquam congue vel leo vitae aliquet. Morbi vulputate odio mattis dolor faucibus, in ultricies dui rhoncus. Vivamus aliquet tincidunt ex eu dignissim. Suspendisse non libero condimentum, vehicula massa non, pharetra lectus. Aliquam posuere leo at lorem suscipit semper. Nam ullamcorper consectetur ornare. In at nibh accumsan, malesuada augue congue, posuere turpis. Quisque eu odio neque. Nulla id odio diam. Fusce imperdiet pulvinar justo, nec iaculis purus dapibus nec.

Integer interdum facilisis ipsum, sit amet tristique nisl lacinia non. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dignissim, nunc non condimentum pellentesque, odio nunc venenatis ligula, sit amet suscipit odio lacus sed est. Ut vehicula, risus non mollis euismod, enim massa congue dolor, non sodales neque nulla non mauris. Curabitur mollis purus eget eros commodo, ut bibendum nibh egestas. Vivamus lacinia lobortis mi nec placerat. Phasellus aliquam, dolor a sagittis maximus, urna purus facilisis neque, eget congue nisi dui eu diam. Ut nec mollis dolor, quis luctus dolor. Nam accumsan est non lorem lacinia cursus. Nullam dui mi, tincidunt eget porttitor id, consequat vel purus. Suspendisse vitae finibus nibh. Quisque nec urna scelerisque, consequat libero et, porttitor velit. Morbi et molestie purus. Ut placerat arcu consequat leo mattis, a pellentesque mauris mollis.

Etiam in tempor arcu. Fusce egestas luctus porttitor. In quam tellus, euismod vel vulputate in, tempus ac eros. Mauris risus ante, sodales sed fringilla nec, venenatis eget risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus in quam tempor, blandit mauris vitae, tempor risus. Integer sollicitudin tellus et sapien interdum, a faucibus urna aliquam. Cras elementum enim lacus, ut volutpat sapien tempor vel. Quisque vehicula malesuada lacinia. Praesent scelerisque volutpat efficitur. Nullam nunc leo, venenatis a malesuada ut, venenatis at dui.

Sed sit amet sodales eros, at feugiat massa. Ut gravida porttitor elit at posuere. Suspendisse potenti. Nam et convallis diam, vitae molestie augue. Quisque efficitur mauris sit amet elit pretium faucibus. Morbi convallis fringilla leo bibendum tincidunt. Mauris vitae leo luctus, hendrerit quam sed, elementum metus. Duis feugiat sapien vitae lacus imperdiet suscipit. Phasellus ac mollis ipsum, vel lacinia lorem. Vestibulum condimentum euismod gravida. Aenean sagittis purus in augue imperdiet maximus.

Etiam varius rhoncus est vitae feugiat. Nunc dolor nisi, pretium et auctor vitae, vulputate nec sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sed tincidunt justo, quis porta dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam eget eleifend sem. Quisque commodo finibus dui eu hendrerit. Donec condimentum eu sem sed aliquet. Integer feugiat non nibh ut placerat.

Vestibulum at sem turpis. Ut non accumsan sapien. In sollicitudin, velit quis auctor aliquet, purus orci lobortis ante, ac ornare neque metus sed risus. Phasellus et tincidunt metus. Fusce laoreet vel mi non luctus. Aenean ipsum elit, elementum et nulla id, ultricies elementum turpis. Sed cursus arcu tincidunt, feugiat arcu efficitur, congue erat. Nulla sollicitudin sit amet sapien nec scelerisque. Pellentesque cursus sem justo, et convallis diam aliquet vitae.';

        $titulos = [
            'Dieta BARF para principiantes',
            'Alimentos crudos recomendados',
            'Errores comunes en la dieta natural',
            'Transición del pienso a BARF',
            'Suplementos necesarios en dieta canina',
            'Cuidado con los huesos crudos',
            'Proteínas esenciales para perros',
            'Vegetales aptos para perros',
            'Frutas que pueden comer los perros',
            'Cómo preparar menús BARF caseros',
            '¿Qué evitar en la dieta BARF?',
            'Hidratación en la alimentación canina',
            'Salud digestiva con dieta natural',
            'BARF y alergias alimentarias',
            'Cómo almacenar carne cruda correctamente',
            'Dieta cruda y salud dental',
            'Consejos de veterinarios sobre BARF',
            '¿Es la dieta BARF adecuada para cachorros?',
            'Desmintiendo mitos sobre alimentación canina',
            'Frecuencia ideal de las comidas BARF',
            'Plan semanal de dieta BARF'
        ];

        for ($i = 0; $i < 21; $i++) {
            Articulo::create([
                'id_usuario' => 3,
                'titulo' => $titulos[$i],
                'contenido' => $contenido,
                'slug' => Str::slug($titulos[$i]),
                'imagen' => 'imagen' . ($i + 1) . '.png',
                'fecha_publicacion' => now(),
            ]);
        }
    }
}
