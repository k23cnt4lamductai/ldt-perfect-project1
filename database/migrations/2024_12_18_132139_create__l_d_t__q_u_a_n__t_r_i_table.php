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
        Schema::create('LDT_QUAN_TRI', function (Blueprint $table) {
            $table->id();
            $table->string('ldtTaiKhoan',225)->unique();
            $table->string('ldtMatKhau',225);
            $table->tinyInteger('ldtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LDT_QUAN_TRI');
    }
};
