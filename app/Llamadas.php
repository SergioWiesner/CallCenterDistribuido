<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llamadas extends Model
{
    protected $table = "llamadas";
    protected $fillable = ['id', 'Entrada'];
}
