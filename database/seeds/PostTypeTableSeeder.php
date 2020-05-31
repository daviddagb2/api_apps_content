<?php

use Illuminate\Database\Seeder;
use App\PostType;

class PostTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostType::create([
            'id' => '1', 
            'name'=> 'Texto',
            'icon' => 'text.png',
            'active' => true
        ]);

        PostType::create([
            'id' => '2', 
            'name'=> 'Imagen',
            'icon' => 'image.png',
            'active' => true
        ]);


        PostType::create([
            'id' => '3', 
            'name'=> 'Video',
            'icon' => 'video.png',
            'active' => true
        ]);


    }
}
