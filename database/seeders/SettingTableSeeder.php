<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'MONITORING',
            'alamat' => 'Brebes',
            'telepon' => '0812345678',
            'path_logo' => '/img/logo.png',
        ]);
    }
}
