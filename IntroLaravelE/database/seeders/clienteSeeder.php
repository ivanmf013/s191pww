<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([
            [
               'nombre' =>'isa',
               'apellido' =>'villagram',
               'correo' =>'isa@gmail.com',
               'telefono' =>'1234567890'
            ],
            [
                'nombre' =>'santiago',
               'apellido' =>'amaya',
               'correo' =>'santi@gmail.com',
               'telefono' =>'+12345687878'
            ],
            [
                'nombre' =>'lolis',
               'apellido' =>'zuñiga',
               'correo' =>'lolis@gmail.com',
               'telefono' =>'+45340987878'
            ]]);

    }
}
