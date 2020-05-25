<?php


namespace App\Resources;

use App\Llamadas as ModelLlamadas;
use Carbon\Carbon;

class Llamadas
{
    public $modelo;

    public function __construct()
    {
        $this->modelo = new ModelLlamadas();
    }

    public function listarLlamadas()
    {
        return Tools::collectionToArray($this->modelo::doesnthave('Operador')->with('Cliente')->get());
    }

    public function registrarLlamadas($datos)
    {

        $fecha = new Carbon();

        $registro = $this->modelo::create([
            'Entrada' => $fecha->toDateTimeString(),
            'documentopersona' => $datos['documentopersona']
        ]);

        $operadores = new Operadores();
        $operadoresDisponibles = $operadores->operadoresDisponibles();
        if (count($operadoresDisponibles) > 0) {
            $conexion = new LlamadasOperadores();
            $conexion->registrarLlamadaOperador(['idLlamada' => $registro->id, 'idOperador' => $operadoresDisponibles[0]['id']]);
        }
        return $registro->id;
    }

    public function colgarLlamada($id)
    {
        $conexion = new LlamadasOperadores();
        $conexion->colgarLlamadaPorLlamada($id);
    }

    public function conectarSiguienteLlamada()
    {
        $listadeLlamadas = self::listarLlamadas();
        dd($listadeLlamadas);

    }
}
