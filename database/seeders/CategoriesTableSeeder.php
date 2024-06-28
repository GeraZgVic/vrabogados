<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Derechos Fundamentales', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Organización del Estado', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Participación Ciudadana', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Protección de Derechos Humanos', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Economía y Trabajo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Justicia y Seguridad', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('categories')->insert($categories);
    }
}
