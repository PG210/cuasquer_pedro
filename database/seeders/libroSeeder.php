<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class libroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [ 
            ['isbn' => '978-987',
            'titulo' => 'El codigo de las mentes extraordinarias',
            'precio' => 110000,
            'stock' => 10,
            'editorial' => '1',
            ],
            ['isbn' => '789-900',
            'titulo' => 'Aprendiendo a pensar',
            'precio' => 200000,
            'stock' => 3,
            'editorial' => '2',
            ],
            ['isbn' => '456-000',
            'titulo' => 'El viejo y el mar',
            'precio' => 45000,
            'stock' => 25,
            'editorial' => '3',
            ],
            ['isbn' => '789-567',
            'titulo' => 'Haryy Potter',
            'precio' => 50000,
            'stock' => 0,
            'editorial' => '4',
            ],
            ['isbn' => '900-567',
            'titulo' => 'El cosmos',
            'precio' => 35000,
            'stock' => 45,
            'editorial' => '5',
            ]
        ];
        DB::table('libro')->insert($datos);
    }
}
