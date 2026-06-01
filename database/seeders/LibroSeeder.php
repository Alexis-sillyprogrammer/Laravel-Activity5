<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    public function run(): void
    {
        $libros = [
            ['titulo' => 'Libro1', 'autor' => 'Autor1', 'año' => 2019],
            ['titulo' => 'Libro2', 'autor' => 'Autor2', 'año' => 2020],
            ['titulo' => 'Libro3', 'autor' => 'Autor3', 'año' => 2021],
            ['titulo' => 'Libro4', 'autor' => 'Autor4', 'año' => 2022],
            ['titulo' => 'Libro5', 'autor' => 'Autor5', 'año' => 2023],
            ['titulo' => 'Libro6', 'autor' => 'Autor6', 'año' => 2024],
            ['titulo' => 'Libro7', 'autor' => 'Autor7', 'año' => 2025],
            ['titulo' => 'Libro8', 'autor' => 'Autor8', 'año' => 2026],
        ];

        foreach ($libros as $libro) {
            Libro::create($libro);
        }
    }
}