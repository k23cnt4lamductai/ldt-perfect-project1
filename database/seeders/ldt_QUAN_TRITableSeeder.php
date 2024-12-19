<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ldt_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $ldtMatKhau = md5("123456a@");
        DB::table('ldt_quan_tri')->insert([
            'ldtTaiKhoan'=>'lamanhtuan2000@gmail.com',
            'ldtMatKhau'=>$ldtMatKhau,
            'ldtTrangThai'=>0,
        ]);
        DB::table('ldt_quan_tri')->insert([
            'ldtTaiKhoan'=>'0338962005',
            'ldtMatKhau'=>$ldtMatKhau,
            'ldtTrangThai'=>0,
        ]);
    }
}

