<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ldt_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ldt_loai_san_pham')->insert([
            'ldtMaLoai'=>'L001',
            'ldtTenLoai'=>'cay canh van phong',
            'ldtTrangThai'=>0,
        ]);
        DB::table('ldt_loai_san_pham')->insert([
            'ldtMaLoai'=>'L002',
            'ldtTenLoai'=>'cay de ban',
            'ldtTrangThai'=>0,
        ]);
        DB::table('ldt_loai_san_pham')->insert([
            'ldtMaLoai'=>'L003',
            'ldtTenLoai'=>'cay canh phong thuy',
            'ldtTrangThai'=>0,
        ]);
        DB::table('ldt_loai_san_pham')->insert([
            'ldtMaLoai'=>'L004',
            'ldtTenLoai'=>'cay thuy canh',
            'ldtTrangThai'=>0,
        ]);

    }
}
