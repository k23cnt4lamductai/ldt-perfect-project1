<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ldt__SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ldt_san_pham')->insert([
            'ldtMaSanPham'=>'VP001',
            'ldtTenSanPham'=>'cay phu quy',
            'ldtHinhAnh'=>'images/san-pham/VP001',
            'ldtSoLuong'=>100,
            'ldtDonGia'=>69900,
            'ldttMaLoai'=>1,
            'ldtTrangThai'=>0
        ]);
        DB::table('ldt_san_pham')->insert([
            'ldtMaSanPham'=>'VP002',
            'ldtTenSanPham'=>'cay dai phu gia',
            'ldtHinhAnh'=>'images/san-pham/VP002',
            'ldtSoLuong'=>200,
            'ldtDonGia'=>550000,
            'ldtMaLoai'=>1,
            'ldtTrangThai'=>0
        ]);
        DB::table('ldt_san_pham')->insert([
            'ldtMaSanPham'=>'VP003',
            'ldtTenSanPham'=>'cay hanh phuc',
            'ldtHinhAnh'=>'images/san-pham/VP003',
            'ldtSoLuong'=>150,
            'ldtDonGia'=>250000,
            'ldtMaLoai'=>1,
            'ldtTrangThai'=>0
        ]);
        DB::table('ldt_san_pham')->insert([
            'ldtMaSanPham'=>'VP004',
            'ldtTenSanPham'=>'cay van loc',
            'ldtHinhAnh'=>'images/san-pham/VP004',
            'ldtSoLuong'=>300,
            'ldtDonGia'=>70000,
            'ldtMaLoai'=>1,
            'ldtTrangThai'=>0
        ]);
        DB::table('ldt_san_pham')->insert([
            'ldtMaSanPham'=>'PT001',
            'ldtTenSanPham'=>'cay thiet moc lan',
            'ldtHinhAnh'=>'images/san-pham/PT001',
            'ldtSoLuong'=>150,
            'ldtDonGia'=>59900,
            'ldtMaLoai'=>3,
            'ldtTrangThai'=>0
        ]);
        DB::table('ldt_san_pham')->insert([
            'ldtMaSanPham'=>'PT002',
            'ldtTenSanPham'=>'cay truong sinh',
            'ldtHinhAnh'=>'images/san-pham/PT002',
            'ldtSoLuong'=>150,
            'ldtDonGia'=>159900,
            'ldtMaLoai'=>3,
            'ldtTrangThai'=>0
        ]);
        DB::table('ldt_san_pham')->insert([
            'ldtMaSanPham'=>'PT003',
            'ldtTenSanPham'=>'cay hanh phuc',
            'ldtHinhAnh'=>'images/san-pham/PT003',
            'ldtSoLuong'=>200,
            'ldtDonGia'=>199900,
            'ldtMaLoai'=>3,
            'ldtTrangThai'=>0
        ]);
        DB::table('ldt_san_pham')->insert([
            'ldtMaSanPham'=>'PT004',
            'ldtTenSanPham'=>'cay hoa nhai',
            'ldtHinhAnh'=>'images/san-pham/PT004',
            'ldtSoLuong'=>300,
            'ldtDonGia'=>199000,
            'ldtMaLoai'=>3,
            'ldtTrangThai'=>0
        ]);
    }
}
