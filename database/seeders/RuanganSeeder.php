<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruangan')->insert([
            'id' => 1,
            'nama_ruang' => 'RTI-RPL-01',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('ruangan')->insert([
            'id' => 2,
            'nama_ruang' => 'RTI-MM-02',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('ruangan')->insert([
            'id' => 3,
            'nama_ruang' => 'RTI-TKJ-03',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('ruangan')->insert([
            'id' => 4,
            'nama_ruang' => 'RPM-01',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('ruangan')->insert([
            'id' => 5,
            'nama_ruang' => 'RPM-02',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('ruangan')->insert([
            'id' => 6,
            'nama_ruang' => 'RPM-03',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
