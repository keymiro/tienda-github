<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveldeestudios')->insert([
            'name' => 'bachillerato',

        ]);
        DB::table('niveldeestudios')->insert([
            'name' => 'maestria',

        ]);
        DB::table('niveldeestudios')->insert([
            'name' => 'profesional',

        ]);
        DB::table('niveldeestudios')->insert([
            'name' => 'especializacion',

        ]);
    }
}
