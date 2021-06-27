<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aulas')->insert([
           
            'id' => '1',
            'nombre' => 'Laboratorio Alcala 1',
            'ubicacion' => 'Fac. Ciencia y Tec. Piso 2',
        ]);
        DB::table('aulas')->insert([
           
            'id' => '2',
            'nombre' => 'Lab CISCO',
            'ubicacion' => 'ATM',
        ]);
        DB::table('aulas')->insert([
           
            'id' => '3',
            'nombre' => '   Aula C5',
            'ubicacion' => 'Fac. Ciencias y Tec. Piso 2 edificio nuevo',
        ]);
    }
}
