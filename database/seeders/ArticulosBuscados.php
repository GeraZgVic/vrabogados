<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticulosBuscados extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articulosBuscados = [
           ['category_id' => '1', 
           'title' => 'ley general para la igualdad entre mujeres y hombres', 
           'url' => 'https://www.diputados.gob.mx/LeyesBiblio/pdf/LGIMH.pdf',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '1', 
           'title' => 'derecho a la libertad de expresión', 
           'url' => 'https://www.cndh.org.mx/pagina/derechos-libertad-de-expresion#:~:text=Este%20derecho%20comprende%20la%20libertad,expresamente%20fijadas%20por%20la%20ley.%22',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '1', 
           'title' => 'ley general de educación', 
           'url' => 'https://www.cndh.org.mx/sites/default/files/doc/Programas/VIH/LeyesNormasReglamentos/Leyes/LeyesFederales/Ley_GE.pdf',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '2', 
           'title' => 'división de poderes', 
           'url' => 'https://mexico.justia.com/federales/constitucion-politica-de-los-estados-unidos-mexicanos/titulo-tercero/capitulo-i/',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '2', 
           'title' => 'división de poderes', 
           'url' => 'https://www.conevyt.org.mx/colaboracion/colabora/objetivos/libros_pdf/sso1_u4lecc3.pdf',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '3', 
           'title' => 'derecho a votar', 
           'url' => 'https://www.votoextranjero.mx/web/vmre/que-ley-respalda-mi-derecho-a-votar',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '3', 
           'title' => 'Mecanismo de Participación Ciudadana', 
           'url' => 'https://www.gob.mx/segob/acciones-y-programas/inscripcion-a-un-mecanismo-de-participacion-ciudadana#:~:text=%C2%BFQu%C3%A9%20son%20los%20mecanismos%20de,y%20evaluaci%C3%B3n%20de%20pol%C3%ADticas%20p%C3%BAblicas.',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '4', 
           'title' => 'Protección de Datos Personales', 
           'url' => 'https://www.gob.mx/bienestar/acciones-y-programas/proteccion-de-datos-personales-313761',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '5', 
           'title' => 'Derecho al Trabajo', 
           'url' => 'https://www.cndh.org.mx/sites/default/files/documentos/2019-05/Cartilla-DH-trabajo.pdf',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '5', 
           'title' => 'Derechos de los trabajadores', 
           'url' => 'https://www.gob.mx/profedet/articulos/conoce-tus-derechos-laborales-23554?idiom=es',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '6', 
           'title' => 'Derecho a un juicio justo', 
           'url' => 'https://news.un.org/es/story/2018/11/1446311',
           'created_at' => now(), 
           'updated_at' => now()],
           ['category_id' => '6', 
           'title' => 'Protección contra Detención Arbitraria', 
           'url' => 'https://www.cndh.org.mx/sites/default/files/documentos/2019-11/Pub-infografias.pdf',
           'created_at' => now(), 
           'updated_at' => now()],
        ];

        DB::table('articles')->insert($articulosBuscados);
    }
}
