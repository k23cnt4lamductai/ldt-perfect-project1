<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('LDT_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('ldtMaKhachHang',255)->unique();
            $table->string('ldtHoTenKhachHang',255);
            $table->string('ldtlEmail',255);
            $table->string('ldtMatKhau',255);
            $table->string('ldtDienThoai',255);
            $table->string('ldtDiaChi',255);
            $table->date('ldtNgayDangKy');
            $table->tinyInteger('ldtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LDT_KHACH_HANG');
    }
};
