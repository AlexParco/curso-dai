<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 4; $i++){
            Estudiante::create(
                [
                    'nombre' => "nombre$i",
                    'apellido' => "apellido$i",
                    'clase' => "clase$i",
                ]
            );
        }
    }
}
