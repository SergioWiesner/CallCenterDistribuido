<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Operadores extends Model
{
    protected $table = "tipoOperadores";
    protected $fillable = ['id', 'nombre'];

    public function operadores()
    {
        return $this->hasMany('App\User', 'tipoOperador', 'id');
    }
}
