<?php


namespace App\Resources;

use App\User;
use Illuminate\Support\Facades\Hash;

class Operadores
{
    public $operadormodel;

    public function __construct()
    {
        $this->operadormodel = new User();
    }

    public function crearOperador($data)
    {
        $data = $this->operadormodel::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'tipoOperador' => $data['tipoOperador'],
            'idSupervisor' => $data['idSupervisor'],
        ]);

        return $data->id;
    }
}
