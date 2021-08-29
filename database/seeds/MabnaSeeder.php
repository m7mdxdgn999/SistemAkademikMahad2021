<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MabnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mabna')->insert([
            [
                'nama_mabna' => 'Mabna Syekh Nawawi',
                'kode_mabna' => 'MA001',

            ],
            [
                'nama_mabna' => 'Mabna Syarifah Mudaim',
                'kode_mabna' => 'MA002',

            ],
            [
                'nama_mabna' => 'Mabna Syekh Abdul Karim',
                'kode_mabna' => 'MA003',

            ],
            [
                'nama_mabna' => 'Mabna Rusunawa',
                'kode_mabna' => 'MA004',

            ],
            [
                'nama_mabna' => 'Mabna Sultan Hasanuddin',
                'kode_mabna' => 'MA005',

            ],
            [
                'nama_mabna' => 'Mabna Syarifah Khodijah',
                'kode_mabna' => 'MA006',

            ]
        ]);
    }
}
