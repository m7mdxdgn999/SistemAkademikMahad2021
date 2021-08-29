<?php

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class TahunAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tahun_akademik')->insert([
            'kode_tahun_akademik'=>'TA001',
            'tahun_akademik'=>'2021-2022 Semester Ganjil',
            'status'=>'aktif',
            'tanggal_awal_pembinaan'=>'2021-08-20',
            'tanggal_akhir_pembinaan'=>'2021-09-01',
            'tanggal_awal_uts'=>'2021-08-20',
            'tanggal_akhir_uts'=>'2021-09-01',
            'tanggal_awal_uas'=>'2021-08-06',
            'tanggal_akhir_uas'=>'2021-08-25',
        ]);
    }
}
