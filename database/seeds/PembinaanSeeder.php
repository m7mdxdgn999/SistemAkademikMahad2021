<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembinaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembinaan')->insert([
            [
                'kode_pembinaan' => 'PN001',
                'nama_pembinaan' => 'Figh',

            ],
            [
                'kode_pembinaan' => 'PN002',
                'nama_pembinaan' => 'Tafsir',

            ],
            [
                'kode_pembinaan' => 'PN003',
                'nama_pembinaan' => 'Hadits',

            ],
            [
                'kode_pembinaan' => 'PN004',
                'nama_pembinaan' => 'Inggris',

            ],
            [
                'kode_pembinaan' => 'PN005',
                'nama_pembinaan' => 'Arab',

            ],
            [
                'kode_pembinaan' => 'PN006',
                'nama_pembinaan' => 'Al-quran',

            ],
            [
                'kode_pembinaan' => 'PN007',
                'nama_pembinaan' => 'Akhlaq',

            ]
        ]);
    }
}
