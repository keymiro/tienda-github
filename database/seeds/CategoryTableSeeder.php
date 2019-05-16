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
            'description' =>'irom man',
            'color'=>'#440022'
           ],
           
            ['name'=>'Geek',
            'slug'=> 'geek',
            'description' =>'captain marvel',
            'color'=>'#445500'
           ]
          
        );   
        
        Category::insert($data);
        
    
    }
}