<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ldt_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('LDT_LOAI_SAN')->insert([
            'ldtMaLoai'=>'L001',
            'ldtTenLoai'=>'cay canh van phong',
            'ldtTrangThai'=>0,
        ]);
        DB::table('LDT_LOAI_SAN')->insert([
            'ldtMaLoai'=>'L002',
            'ldtTenLoai'=>'cay de ban',
            'ldtTrangThai'=>0,
        ]);
        DB::table('LDT_LOAI_SAN')->insert([
            'ldtMaLoai'=>'L003',
            'ldtTenLoai'=>'cay canh phong thuy',
            'ldtTrangThai'=>0,
        ]);
        DB::table('LDT_LOAI_SAN')->insert([
            'ldtMaLoai'=>'L004',
            'ldtTenLoai'=>'cay thuy canh',
            'ldtTrangThai'=>0,
        ]);

    }
}
