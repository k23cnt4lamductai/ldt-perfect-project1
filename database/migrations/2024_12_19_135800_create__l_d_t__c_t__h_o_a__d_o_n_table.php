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
        Schema::create('LDT_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ldtHoaDonID')->references('id')->on('ldt_Hoa_Don');
            $table->bigInteger('ldtSanPhamID')->references('id')->on('ldt_san_pham');
            $table->integer('ldtSoLuongMua');
            $table->float('ldtDonGiaMua');
            $table->float('ldtThanhTien');
            $table->tinyInteger('ldtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LDT_CT_HOA_DON');
    }
};
