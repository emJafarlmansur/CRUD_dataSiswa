<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert(
            [
                'nama'=>'ali',
                'nomor_induk'=>'1223',
                'alamat'=>'kaliasin',
                'created_at'=>date('y-m-d h:i:s')
            ]);

            DB::table('siswa')->insert([
                'nama'=>'narnik',
                'nomor_induk'=>'1224',
                'alamat'=>'bantengan',
                'created_at'=>date('y-m-d h:i:s')
            ]);
            DB::table('siswa')->insert([
                'nama'=>'ndemun',
                'nomor_induk'=>'1225',
                'alamat'=>'bangeran',
                'created_at'=>date('y-m-d h:i:s')
            ]);
            DB::table('siswa')->insert([
                'nama'=>'mazzini',
                'nomor_induk'=>'1226',
                'alamat'=>'petamburan',
                'created_at'=>date('y-m-d h:i:s')
            ]);
    }
}
