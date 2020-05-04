<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLlamadasOperadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Llamadas_Operadores', function (Blueprint $table) {
            $table->id();
            $table->integer('idLlamada');
            $table->integer('idOperador');
            $table->timestamp('Inicio')->nullable(true);
            $table->timestamp('Final')->nullable(true);
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
        Schema::dropIfExists('Llamadas_Operadores');
    }
}
