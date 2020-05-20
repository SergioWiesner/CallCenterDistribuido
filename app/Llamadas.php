<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llamadas extends Model
{
    protected $table = "Llamadas";
    protected $fillable = ['id', 'Entrada', 'documentopersona'];

    public function Operador()
    {
        return $this->hasOne('App\Llamadas_Operadores', 'idLlamada', 'id');
    }

    public function Cliente()
    {
        return $this->belongsTo('App\Clientes', 'documentopersona', 'id');
    }
}
