<?php


namespace App\Resources;

use App\Llamadas_Operadores;
use Carbon\Carbon;

class LlamadasOperadores
{
    public $modelo;

    public function __construct()
    {
        $this->modelo = new Llamadas_Operadores();
    }

    public function registrarLlamadaOperador($data)
    {
        $fecha = new Carbon();
        $this->modelo::create([
            'idLlamada' => $data['idLlamada'],
            'idOperador' => $data['idOperador'],
            'Inicio' => $fecha->toDateTimeString()
        ]);
    }

    public function colgarLlamadaPorLlamada($idLlamada)
    {
        $fecha = new Carbon();
        $this->modelo::where('idLlamada', $idLlamada)->update([
            "fin" => $fecha->toDateTimeString()
        ]);
    }
}
