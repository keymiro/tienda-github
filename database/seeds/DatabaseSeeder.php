<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // model::unguard();
        // $this->call(UsersTableSeeder::class);
        //$this->call(CategoryTableSeeder::class);
        //$this->call(ProductTableSeeder::class);
        //model::unguard();

        $this->truncateTables([

            'roles','personas', 'proveedores','cjcs','products','categories','niveldeestudios',
        ]);
        model::unguard();
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ProveedoresTableSeeder::class);
        $this->call(CjcsTableSeeder::class);
        $this->call(NivelTableSeeder::class);
        model::unguard();

    }

    //$this->call(UsersTableSeeder::class);
    //$this->call(PersonasTableSeeder::class);




protected function truncateTables(array $tables){

    DB::statement('SET FOREIGN_KEY_CHECKS = 0');

    foreach ($tables as $table){

        DB::table($table)->truncate();

    }

    DB::statement('SET FOREIGN_KEY_CHECKS = 1');

}

}
