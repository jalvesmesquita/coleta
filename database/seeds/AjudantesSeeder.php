<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AjudantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ajudantes')->insert(
            [
                [
                    'nome' => 'jose da silva duda',
                    'email' => 'duda@gmail.com',
                    'rg' => '1221',
                    'cpf' => '2121212',
                    'nascimento' => '2010-10-10',
                    'telefone' => '122121212121'
                ],
                [
                    'nome' => 'jose pedro da silva',
                    'email' => 'dudoso@gmail.com',
                    'rg' => '122121',
                    'cpf' => '21212121',
                    'nascimento' => '2010-10-10',
                    'telefone' => '12212'
                ],
                [
                    'nome' => 'fulano de tal da silva',
                    'email' => 'dudaoo@gmail.com',
                    'rg' => '121221',
                    'cpf' => '2212121',
                    'nascimento' => '2010-10-10',
                    'telefone' => '2122112'
                ]
            ]
        );
    }
}
