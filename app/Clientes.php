<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = "clientes";
    protected $fillable = ['id', 'nombre', 'apellidos', 'ciudad', 'correo'];

    public function Llamada()
    {
        return $this->hasMany('App\Llamadas', 'documentopersona', 'id');
    }


}
