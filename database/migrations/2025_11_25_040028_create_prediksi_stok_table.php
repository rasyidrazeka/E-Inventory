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
        Schema::create('prediksi_stok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id');
            $table->decimal('rata2_pemakaian_harian', 10, 2);
            $table->date('prediksi_stok_habis');
            $table->integer('saran_restok');
            $table->timestamps();

            $table->foreign('produk_id')->references('id')->on('produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prediksi_stok');
    }
};
