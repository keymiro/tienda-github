<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            'nombre' => 'VERANO',
            'nit' => '1234567890-1',
            'email' => 'verano@gmail.com',
            'telefono' => '3209834652',
            'relegal' => 'jose perez',
        ]); 
        DB::table('proveedores')->insert([
            'nombre' => 'OTOÑO',
            'nit' => '1234567890-2',
            'email' => 'otoño@gmail.com',
            'telefono' => '3209834653',
            'relegal' => 'juan gomez',
        ]);
    }
}
