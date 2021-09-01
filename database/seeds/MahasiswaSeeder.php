<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            [
                'nim'=>'11170930000084',
                'nama_mahasiswa'=>'Muhammad',
                'email'=>'mahasiswa@gmail.com',
                'password'=>bcrypt('12345678') ,
                'kode_tahun_akademik'=>'TA001',
                'semester_aktif'=>'1',
                'fakultas_jurusan'=>'sains dan teknologi / sistem informasi',        
                'no_hp_mahasiswa'=>'081317',  
                'tempat_tanggal_lahir'=>'Mekkah,13-12-1999',     
                'jalur_masuk'=>'Mekkah,13-12-1999',  
                'nama_org_tua'=>'abdurrahman',  
                'no_hp_org_tua'=>'abdurrahman',  
                'alamat_lengkap'=>'banjarmasin', 
                'kode_mabna'=>'MA001', 
            ]
        ]);
    }
}
