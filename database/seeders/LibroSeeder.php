<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Genero;
use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autores = Autor::all();
        $generos = Genero::all();

        foreach ($autores as $autor) {

            $libros = Libro::factory()
                ->count(3)
                ->create([
                    'autor_id' => $autor->id
                ]);

            foreach ($libros as $libro) {
                $libro->generos()->attach(
                    $generos->random(rand(1,3))->pluck('id')
                );
            }
        }
    }
}
