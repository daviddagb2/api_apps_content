<?php
use Illuminate\Database\Seeder;
use App\UserType;

class UsersTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
            UserType::create([
                'id' => '1', 
                'name'=> 'Root',
                'active' => true
            ]);

            UserType::create([
                'id' => '2', 
                'name'=> 'Administrator',
                'active' => true
            ]);

            UserType::create([
                'id' => '3',
                'name'=> 'Basic',
                'active' => true
            ]);
    }
}
