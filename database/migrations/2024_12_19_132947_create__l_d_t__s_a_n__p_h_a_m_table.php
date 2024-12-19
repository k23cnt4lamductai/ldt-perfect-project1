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
        Schema::create('LDT_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('ldtMaSanPham',255)->unique();
            $table->string('ldtTenSanPham',255);
            $table->string('ldtlHinhAnh',255);
            $table->integer('ldtSoLuong');
            $table->float('ldtDonGia');
            $table->bigInteger('ldtMaLoai')->references('id')->on('ldt_loai_san_pham');
            $table->tinyInteger('ldtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LDT_SAN_PHAM');
    }
};
