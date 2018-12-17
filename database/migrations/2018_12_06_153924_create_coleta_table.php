<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coleta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motorista_id')->unsigned();
            $table->integer('veiculo_id')->unsigned();
            $table->integer('ajudante_id')->unsigned();
            $table->date('data');
            $table->float('quantidade')->nullable();
            $table->string('observacao')->nullable();
            $table->timestamps();

            $table->foreign('motorista_id')->references('id')->on('motoristas');
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
            $table->foreign('ajudante_id')->references('id')->on('ajudantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coleta');
    }
}
