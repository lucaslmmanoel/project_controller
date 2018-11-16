<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoProjetoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tipo_projeto', function (Blueprint $table) {
            $table->increments('id_tipo_projeto');
            $table->string('nome', '30');
            $table->string('desc', '70')->nullable();
            $table->enum('status', ['A', 'I'])->default('A');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tipo_projeto');
    }
}
