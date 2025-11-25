<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            'nama' => 'Elektronik',
            'deskripsi' => 'Kategori ini berisi produk-produk teknologi modern yang dirancang untuk mendukung aktivitas digital dan hiburan sehari-hari. Mulai dari smartphone, laptop, hingga perangkat audio dan wearable, semuanya hadir untuk memberikan kemudahan, kenyamanan, dan produktivitas maksimal bagi pengguna.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kategori')->insert([
            'nama' => 'Peralatan Rumah Tangga',
            'deskripsi' => 'Kategori ini mencakup peralatan yang membantu pekerjaan rumah menjadi lebih efisien dan praktis. Produk-produk seperti blender, rice cooker, air fryer, dan vacuum cleaner dibuat untuk menunjang kebutuhan dapur, kebersihan, dan kenyamanan rumah dalam aktivitas harian.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kategori')->insert([
            'nama' => 'Fashion & Apparel',
            'deskripsi' => 'Kategori ini menghadirkan berbagai pilihan pakaian dan perlengkapan fashion untuk menunjang gaya serta kenyamanan dalam berbagai aktivitas. Produk-produk di dalamnya memiliki desain modern, kualitas bahan yang baik, dan cocok untuk penggunaan kasual maupun formal.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kategori')->insert([
            'nama' => 'Kebutuhan Kantor',
            'deskripsi' => 'Kategori ini berisi perlengkapan kantor yang mendukung produktivitas kerja, baik untuk kebutuhan administrasi, arsip, maupun kegiatan tulis-menulis. Dari pulpen, buku catatan, hingga stapler, semua produk bertujuan meningkatkan efisiensi dalam lingkungan kerja.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kategori')->insert([
            'nama' => 'Kecantikan & Perawatan',
            'deskripsi' => 'Kategori ini menyediakan berbagai produk perawatan tubuh dan wajah yang membantu menjaga kesehatan serta penampilan. Mulai dari skincare, sunscreen, hingga haircare, semua dirancang untuk memenuhi kebutuhan perawatan harian dengan bahan yang aman dan nyaman digunakan.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
