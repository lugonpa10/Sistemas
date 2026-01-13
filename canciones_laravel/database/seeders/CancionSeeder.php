<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cancions')->insert([
            'titulo'=>'Debi tirar mas fotos',
            'album'=>'DTMF',
            'grupo'=>'Bad bunny',
            'anio'=>'2025'

        ]
        
        );

         DB::table('cancions')->insert([
            'titulo'=>'444',
            'album'=>'No lo se',
            'grupo'=>'Yan block',
            'anio'=>'2025'

        ]
        
        );

         DB::table('cancions')->insert([
            'titulo'=>'Como se siente remix',
            'album'=>'las que no iban a salir',
            'grupo'=>'Bad bunny',
            'anio'=>'2020'

        ]
        
        );
    }
}
