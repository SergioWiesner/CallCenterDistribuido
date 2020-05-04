<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llamadas_Operadores extends Model
{
    protected $table = "llamadas_operadores";
    protected $fillable = ['id', 'idLlamada', 'idOperador', 'Inicio', 'Final'];
}
