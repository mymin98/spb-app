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
        Schema::create('PenggunaDalaman', function (Blueprint $table) {
            $table->id('pengguna_ID');
            $table->string('pengguna_nama');
            $table->string('pengguna_noKP')->unique();
            $table->string('pengguna_gelaranJawatan');
            $table->string('pengguna_bahagianID');
            $table->string('pengguna_namaBahagian');
            $table->string('pengguna_katalaluan');
            $table->string('pengguna_IDPerananRef');
            $table->string('pengguna_staffID');
            $table->timestamp('pengguna_createdAt')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PenggunaDalaman');
    }
};
