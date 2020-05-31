<?php

use Illuminate\Database\Seeder;
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
        
        Category::create([
            'id' => '1', 
            'name'=> 'Default',
            'active' => true
        ]);


        Category::create([
            'id' => '2', 
            'name'=> 'Fun',
            'active' => true
        ]);

    }
}
