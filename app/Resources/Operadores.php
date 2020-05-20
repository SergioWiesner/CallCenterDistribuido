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

    public function operadoresDisponibles($id = 0)
    {
        try {
            $operadores = Tools::collectionToArray($this->operadormodel::where('tipoOperador', $id)->whereDoesntHave('llamadas', function ($query) {
                $query->whereNull('fin');
            })->get());
            if (count($operadores) <= 0) {
                $operadores = self::operadoresDisponibles($id + 1);
            }
            return $operadores;
        } catch (\Exception $e) {
            return [];
        }

    }
}
