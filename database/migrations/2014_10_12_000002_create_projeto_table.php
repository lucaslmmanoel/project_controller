<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_projeto', function (Blueprint $table) {
            $table->increments('id_projeto');
            $table->string('nome', 30);
            $table->char('status', 1)->default('A');
            $table->decimal('valor');
            $table->date('dt_inicio');
            $table->date('dt_fim');

            $table->integer('id_tipo_projeto')->unsigned();
            $table->foreign('id_tipo_projeto')->references('id_tipo_projeto')->on('tb_tipo_projeto');

            $table->integer('id_demandante')->unsigned();
            $table->foreign('id_demandante')->references('id_demandante')->on('tb_demandante');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_projeto');
    }
}
