<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotoristasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motoristas')->insert(
            [
                [
                    'nome' => 'Motorista 1',
                    'email' => 'motorista1@gmail.com',
                    'endereco' => 'rua 1 de teste',
                    'telefone' => '9898989',
                    'nascimento' => '2010-10-10',
                    'cnh' => '812982912',
                    'sexo' => 'M'
                ],
                [
                    'nome' => 'Motorista 2',
                    'email' => 'motorista2@gmail.com',
                    'endereco' => 'rua 2 de teste',
                    'telefone' => '122112',
                    'nascimento' => '2010-10-10',
                    'cnh' => '231232323',
                    'sexo' => 'M'
                ],
                [
                    'nome' => 'Jose de teste',
                    'email' => 'josedeteste@gmail.com',
                    'endereco' => 'rrua de testeeee',
                    'nascimento' => '2010-10-10',
                    'telefone' => '122112',
                    'cnh' => '231232323',
                    'sexo' => 'M'
                ]
            ]
        );
    }
}
