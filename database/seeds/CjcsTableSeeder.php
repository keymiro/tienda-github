<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CjcsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cjcs')->insert([
            'nombre' => 'cjs',
            'nit' => '1234567890-0',
            'email' => 'cjcs@gmail.com',
            'telefono' => '3221234567',
            'relegal' => 'jhonatan pineda',
        ]); 
    }
}
