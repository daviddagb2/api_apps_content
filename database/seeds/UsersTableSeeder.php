<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => "Administrador",
            'email' => env('ADMIN_EMAIL', "admin@gmail.com"), 
            'password' => bcrypt('admin'),
            'user_name' => "admin",
            'active' => true,
            'user_type_id' => 1, //Super admin
          //  'company_id' => 1 //Default company
        ]);
    }
}
