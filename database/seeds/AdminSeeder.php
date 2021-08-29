<?php

use Illuminate\Database\Seeder;
use App\User;
Use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        
        DB::table('admins')->insert([
            'name'=>'Admin Mahad',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
        
    }
}
