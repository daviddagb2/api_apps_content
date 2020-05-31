<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name'  => '1', 
            'package' => 'DemoApp',
            'image' => 'demoapp.png',
            'icon' => 'demoicon.png',
            'urlapp'  => 'demoicon.png',
            'active' => true,
        ]);

    }
}
