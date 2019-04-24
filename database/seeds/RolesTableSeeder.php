<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('roles')->insert([
         'nombre' => 'cliente',
         'descripcion' => 'posible comprador',
     ]);

     DB::table('roles')->insert([
        'nombre' => 'administrador',
        'descripcion' => 'controlador de crud de roles y usuarios',
    ]);

    }
}
