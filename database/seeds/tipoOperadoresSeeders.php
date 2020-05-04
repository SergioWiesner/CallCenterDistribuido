<?php

use Illuminate\Database\Seeder;

class tipoOperadoresSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipooperadores')->insert([
            'nombre' => "Operador",
        ]);
        DB::table('tipooperadores')->insert([
            'nombre' => "Supervisor",
        ]);
        DB::table('tipooperadores')->insert([
            'nombre' => "Director",
        ]);
    }
}
