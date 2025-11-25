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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('supplier_id');
            $table->string('nama', 150)->unique();
            $table->string('sku', 100);
            $table->integer('stok');
            $table->integer('min_stok');
            $table->string('unit', 50);
            $table->decimal('harga', 15, 2);
            $table->string('foto', 255)->nullable();
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->foreign('supplier_id')->references('id')->on('supplier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
