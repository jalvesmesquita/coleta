<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(MotoristasSeeder::class);
         $this->call(VeiculosSeeder::class);
         $this->call(AjudantesSeeder::class);
         $this->call(UsuariosSeeder::class);
    }
}
