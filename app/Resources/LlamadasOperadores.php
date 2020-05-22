<?php


namespace App\Resources;

use App\Llamadas_Operadores;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        DB::table('Llamadas_Operadores')->updateOrInsert(
            ['idLlamada' => $idLlamada, 'fin' => $fecha->toDateTimeString()],
            ['idOperador' => null, 'Inicio' => $fecha->toDateTimeString(), 'created_at' => $fecha->toDateTimeString(), 'updated_at' => $fecha->toDateTimeString()]
        );
    }

    public function colgarLlamadaPorOperador($idOperador)
    {
        $fecha = new Carbon();
        $this->modelo::where('idOperador', $idOperador)->update([
            'fin' => $fecha->toDateTimeString()
        ]);
    }
}
