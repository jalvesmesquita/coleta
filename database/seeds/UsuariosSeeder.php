<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert(
            [
                [
                    'nome' => 'bianca duda',
                    'endereco' => 'rua de teste 1',
                    'email' => 'bianca@gmail.com',
                    'senha' => 'aegagaeg',
                    'latitude' => '12212',
                    'longitude' => '122121'
                ],
                [
                    'nome' => 'neto duda',
                    'endereco' => 'rua de teste 2',
                    'email' => 'neto@gmail.com',
                    'senha' => '1221',
                    'latitude' => '212112',
                    'longitude' => '21212'
                ],
                [
                    'nome' => 'emanoel duda',
                    'endereco' => 'rua de teste 3',
                    'email' => 'ahueauh@gmail.com',
                    'senha' => '12212',
                    'latitude' => '211221',
                    'longitude' => '122112'
                ]
            ]
        );
    }
}
