<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cargo', function (Blueprint $table) {
            $table->increments('id_cargo');
            $table->string('nome', '30');
            $table->text('desc')->nullable();
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
        Schema::dropIfExists('tb_cargo');
    }
}
