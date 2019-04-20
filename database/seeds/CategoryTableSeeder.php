<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =array(
        
            ['name'=>'super heroes',
            'slug'=> 'super-heores',
            'description' =>'Lores ipsun dolor sit amet, consecteturadipising elit. tempore, perferendis!',
            'color'=>'#440022'
           ],
           
            ['name'=>'Geek',
            'slug'=> 'geek',
            'description' =>'Lores ipsun dolor sit amet, consecteturadipising elit. tempore, perferendis!',
            'color'=>'#445500'
           ]
          
        );   
        
        Category::insert($data);
        
    
    }
}