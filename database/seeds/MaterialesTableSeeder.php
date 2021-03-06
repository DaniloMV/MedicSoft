<?php

use Illuminate\Database\Seeder;

class MaterialesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materiales')->insert([
            'tipo_material' => 'VAGI COVER',
            'descripcion' => '?',
            'modelo_marca' => 'ZMS',
            'serial' => '?'
        ]);
        DB::table('materiales')->insert([
            'tipo_material' => 'TUBOS',
            'descripcion' => 'TAPA ROJA',
            'modelo_marca' => 'VD X 100 (6ML)',
            'serial' => '?'
        ]);
        DB::table('materiales')->insert([
            'tipo_material' => 'SOLUCION',
            'descripcion' => ' 500 ML',
            'modelo_marca' => 'RINGER LACTATO',
            'serial' => '?'
        ]);
        DB::table('materiales')->insert([
            'tipo_material' => 'SOLUCION',
            'descripcion' => '0,9',
            'modelo_marca' => 'CLORURO DE SODIO',
            'serial' => '?'
        ]);
    }
}
