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
        $user=Dosen::create ([
            'kode_dosen'=>'001',
            'nama_dosen'=>'Muhammad',
            'no_hp_dosen'=>'08138' ,
            'kode_mabna'=>'214',
            'email'=>'dosen@gmail.com',
            'password'=>bcrypt('12345678'),
            'email_verified_at'=>now()
        ]);

        DB::table('dosen')->insert([
            [
                'kode_dosen'=>'001',
                'nama_dosen'=>'Muhammad',
                'no_hp_dosen'=>'08138' ,
                'kode_mabna'=>'214',
                'email'=>'dosen@gmail.com',
                'password'=>bcrypt('12345678'),
                'email_verified_at'=>now()
            ]
        ]);
        $user=Dosen::create ([
            'kode_dosen'=>'001',
            'nama_dosen'=>'Muhammad',
            'no_hp_dosen'=>'08138' ,
            'kode_mabna'=>'214',
            'email'=>'dosen@gmail.com',
            'password'=>bcrypt('12345678'),
            'email_verified_at'=>now()
        ]);

        $user->assignRole('dosen');     
    
    }
}
