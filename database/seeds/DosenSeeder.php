<?php

use App\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class 
DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            [
                'kode_dosen'=>'DO001',
                'nama_dosen'=>'Muhammad',
                'nip'=>'11170930000084',
                'no_hp_dosen'=>'08138' ,
                'kode_mabna'=>'MA001',
                'email'=>'dosen@gmail.com',
                'password'=>bcrypt('12345678'),           
            ]
        ]);


    
    }
}
