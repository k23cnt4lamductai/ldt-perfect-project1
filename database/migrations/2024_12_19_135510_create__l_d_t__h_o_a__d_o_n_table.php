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
        Schema::create('LDT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('ldtMaHoaDon',255)->unique();
            $table->bigInteger('ldtMaKhachHang')->references('id')->on('ldt_khach_hang');
            $table->date('ldtNgayHoaDon');
            $table->string('ldtHoTenKhachHang',255);
            $table->string('ldtEmail',255);
            $table->string('ldtDienThoai',255);
            $table->string('ldtDiaChi',255);
            $table->float('ldtTongTriGia',255);
            $table->tinyInteger('ldtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LDT_HOA_DON');
    }
};
