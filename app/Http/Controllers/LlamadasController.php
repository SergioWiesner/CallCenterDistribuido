<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources\Llamadas;


class LlamadasController extends Controller
{

    public $manager;

    public function __construct()
    {
        $this->manager = new Llamadas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            return response()->json([
                'state' => 500,
                'data' => $this->manager->listarLlamadas()
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
    public function store(Request $request)
    {
        try {
            $id = $this->manager->registrarLlamadas($request->all());
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
     * @param \App\Llamadas $llamadas
     * @return \Illuminate\Http\Response
     */
    public function show(Llamadas $llamadas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Llamadas $llamadas
     * @return \Illuminate\Http\Response
     */
    public function edit(Llamadas $llamadas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Llamadas $llamadas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Llamadas $llamadas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Llamadas $llamadas
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function destroy($llamadas)
    {
        try {
            $this->manager->colgarLlamada($llamadas);
            return response()->json([
                'state' => 500,
                'data' => []
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
}
