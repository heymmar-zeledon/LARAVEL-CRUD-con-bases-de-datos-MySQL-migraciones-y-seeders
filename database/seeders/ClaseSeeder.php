<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clases')->insert([
           
            'codclase' => '1',
            'nombre' => 'Prog Unix',
            'credito' => '3',
        ]);
        DB::table('clases')->insert([
           
            'codclase' => '2',
            'nombre' => 'Prog Laravel',
            'credito' => '4',
        ]);
        DB::table('clases')->insert([
           
            'codclase' => '3',
            'nombre' => 'Prog PHP',
            'credito' => '4',
        ]);
       
    }
}
