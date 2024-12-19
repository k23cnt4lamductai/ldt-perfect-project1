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
        Schema::create('LDT_LOAI_SAN', function (Blueprint $table) {
            $table->id();
            $table->string('vklMaLoai',255)->unique();
            $table->string('vklTenLoai',255);
            $table->tinyInteger('vklTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LDT_LOAI_SAN');
    }
};
