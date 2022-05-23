<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merks')->insert([
            'idMerk' => '101',
            'kode_jenis' => '121',
            'namaMerk'=>'LG',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '102',
            'kode_jenis' => '121',
            'namaMerk' => 'SAMSUNG',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '103',
            'kode_jenis' => '121',
            'namaMerk' => 'Xiaomi',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '104',
            'kode_jenis' => '121',
            'namaMerk' => 'Dell',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '105',
            'kode_jenis' => '121',
            'namaMerk' => 'HP',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '106',
            'kode_jenis' => '121',
            'namaMerk' => 'Lenovo',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '107',
            'kode_jenis' => '121',
            'namaMerk' => 'Asus',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '108',
            'kode_jenis' => '121',
            'namaMerk' => 'BenQ',
        ]);

        DB::table('merks')->insert([
            'idMerk' => '201',
            'kode_jenis' => '222',
            'namaMerk' => 'Logitech',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '202',
            'kode_jenis' => '222',
            'namaMerk' => 'Steelseries',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '203',
            'kode_jenis' => '222',
            'namaMerk' => 'Razer',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '204',
            'kode_jenis' => '222',
            'namaMerk' => 'Asus',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '205',
            'kode_jenis' => '222',
            'namaMerk' => 'Corsair',
        ]);


        DB::table('merks')->insert([
            'idMerk' => '301',
            'kode_jenis' => '313',
            'namaMerk' => 'Logitech',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '302',
            'kode_jenis' => '313',
            'namaMerk' => 'Steelseries',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '303',
            'kode_jenis' => '313',
            'namaMerk' => 'Corsair',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '304',
            'kode_jenis' => '313',
            'namaMerk' => 'Lenovo',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '305',
            'kode_jenis' => '313',
            'namaMerk' => 'Razer',
        ]);

        DB::table('merks')->insert([
            'idMerk' => '401',
            'kode_jenis' => '424',
            'namaMerk' => 'Canon',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '402',
            'kode_jenis' => '424',
            'namaMerk' => 'EPSON',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '403',
            'kode_jenis' => '424',
            'namaMerk' => 'SHARP',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '404',
            'kode_jenis' => '424',
            'namaMerk' => 'SAMSUNG',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '405',
            'kode_jenis' => '424',
            'namaMerk' => 'HP',
        ]);
        DB::table('merks')->insert([
            'idMerk' => '406',
            'kode_jenis' => '424',
            'namaMerk' => 'Panasonic',
        ]);
    }
}
