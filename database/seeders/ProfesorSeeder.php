<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesores')->insert([
           
            'id' => '321',
            'nombre' => 'Angelica',
            'apellido' => 'moraga',
            'titulo' => 'LIC',
        ]);
        DB::table('profesores')->insert([
            'id' => '11',
            'nombre' => 'marvel',
            'apellido' => 'xm',
            'titulo' => 'MSC',
        ]);
        DB::table('profesores')->insert([
            'id' => '895',
            'nombre' => 'Nando',
            'apellido' => 'cordoba',
            'titulo' => 'LIC',
        ]);
    }
  
}
