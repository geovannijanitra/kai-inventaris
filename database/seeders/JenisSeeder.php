<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
            'kodeJenis'=>'121',
            'jenisBarang'=>'Monitor'
        ]);

        DB::table('jenis')->insert([
            'kodeJenis' => '222',
            'jenisBarang' => 'Mouse'
        ]);

        DB::table('jenis')->insert([
            'kodeJenis' => '313',
            'jenisBarang' => 'Keyboard'
        ]);

        DB::table('jenis')->insert([
            'kodeJenis' => '424',
            'jenisBarang' => 'Printer'
        ]);
    }
}
