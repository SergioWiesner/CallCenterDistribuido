<?php

namespace App\Http\Controllers;

use App\Http\Requests\operadorRequest;
use Illuminate\Http\Request;
use App\Resources\Operadores;

class OperadoresController extends Controller
{
    public $manager;

    public function __construct()
    {
        $this->manager = new Operadores();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function index()
    {
        try {

            return response()->json([
                'state' => 500,
                'data' => $this->manager->operadoresDisponibles()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'state' => 401,
                'data' => [
                    "error" => $e->getMessage()
                ]
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(operadorRequest $request)
    {
        try {
            $id = $this->manager->crearOperador($request->all());
            return response()->json([
                'state' => 500,
                'data' => [
                    "id" => $id
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'state' => 401,
                'data' => [
                    "error" => $e->getMessage()
                ]
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Operadores $operadores
     * @return \Illuminate\Http\Response
     */
    public function show(Operadores $operadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Operadores $operadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Operadores $operadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Operadores $operadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operadores $operadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Operadores $operadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operadores $operadores)
    {
        //
    }
}
