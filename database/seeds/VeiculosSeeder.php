<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VeiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veiculos')->insert(
            [
                [
                    'tipo' => 'Caminhao',
                    'cubagem' => '1000',
                    'placa' => 'AAA-1111',
                ],
                [
                    'tipo' => 'Carro pequeno',
                    'cubagem' => '500',
                    'placa' => 'BBB-4444',
                ],
                [
                    'tipo' => 'Carreta',
                    'cubagem' => '5000',
                    'placa' => 'DDD-2323',
                ]
            ]
        );
    }
}
