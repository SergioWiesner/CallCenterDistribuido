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
            $table->integer('idOperador')->nullable(true);
            $table->timestamp('inicio')->nullable(true);
            $table->timestamp('fin')->nullable(true);
            $table->timestamps();
            $table->softDeletes();
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
