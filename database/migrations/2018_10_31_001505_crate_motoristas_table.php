<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateMotoristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motoristas', function( Blueprint $table ){
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('telefone')->nullable();
            $table->date('nascimento');
            $table->char('sexo', 1);
            $table->string('endereco');
            $table->string('cnh');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('motoristas');
    }
}
