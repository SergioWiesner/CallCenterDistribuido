<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operadores extends Model
{
    protected $table = "operadores";
    protected $fillable = ['id', 'nombre', 'tipoOperador', 'idSupervisor'];
}
