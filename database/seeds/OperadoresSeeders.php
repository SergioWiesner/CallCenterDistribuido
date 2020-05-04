<?php

use Illuminate\Database\Seeder;

class OperadoresSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Operadores')->insert([
            'nombre' => "Sergio Wiesner",
            'tipoOperador' => 3,
        ]);
        DB::table('Operadores')->insert([
            'nombre' => "David Wiesner",
            'tipoOperador' => 2,
        ]);
        DB::table('Operadores')->insert([
            'nombre' => "Felipe Uribe",
            'tipoOperador' => 3,
        ]);
        DB::table('Operadores')->insert([
            'nombre' => "Fabian uribe",
            'tipoOperador' => 3,
        ]);
        DB::table('Operadores')->insert([
            'nombre' => "Alejandro Castro",
            'tipoOperador' => 3,
        ]);
        DB::table('Operadores')->insert([
            'nombre' => "Sergio Macias",
            'tipoOperador' => 1,
        ]);
    }
}
