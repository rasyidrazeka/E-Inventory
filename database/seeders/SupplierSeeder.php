<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supplier')->insert([
            'nama' => 'PT Techno Global Elektronik',
            'alamat' => 'Jl. Soekarno Hatta No. 88, Malang',
            'no_hp' => '081244558932',
            'email' => 'support@technoglobal.co.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'CV Digital Computech',
            'alamat' => 'Jl. Diponegoro No. 12, Surabaya',
            'no_hp' => '087866549102',
            'email' => 'sales@dcomputech.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'PT Luma Indo Visual',
            'alamat' => 'Jl. Gatot Subroto No. 19, Jakarta Selatan',
            'no_hp' => '082199116773',
            'email' => 'cs@lumavision.co.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'SonicBeat Audio Distributor',
            'alamat' => 'Jl. Pahlawan No. 21, Bandung',
            'no_hp' => '081377452110',
            'email' => 'info@sonicbeat.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'PT PulseTrack Indonesia',
            'alamat' => 'Jl. Imam Bonjol No. 43, Semarang',
            'no_hp' => '085722218899',
            'email' => 'admin@pulsetrack.co.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'MaxBlend Kitchen Supplier',
            'alamat' => 'Jl. Tentara Pelajar No. 88, Yogyakarta',
            'no_hp' => '081256773341',
            'email' => 'support@maxblend.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'PT DustFree Machinery',
            'alamat' => 'Jl. Kertajaya No. 55, Surabaya',
            'no_hp' => '082211885001',
            'email' => 'contact@dustfree.co.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'HeatMaster Appliances',
            'alamat' => 'Jl. Melati No. 16, Bekasi',
            'no_hp' => '081377224044',
            'email' => 'cs@heatmaster.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'PT CookSmart Indonesia',
            'alamat' => 'Jl. Veteran No. 7, Jakarta Barat',
            'no_hp' => '085192217088',
            'email' => 'info@cooksmart.co.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'AeroBreeze Ventilation Supply',
            'alamat' => 'Jl. Rajawali No. 90, Surakarta',
            'no_hp' => '081955770101',
            'email' => 'sales@aerobreeze.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'Oxford Fashion House',
            'alamat' => 'Jl. Gajah Mada No. 14, Kediri',
            'no_hp' => '082322118890',
            'email' => 'admin@oxfordhouse.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'PT FlexFit Textile',
            'alamat' => 'Jl. Sisingamangaraja No. 30, Bandung',
            'no_hp' => '085742315500',
            'email' => 'info@flexfittextile.co.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'StormX Outdoor Supplier',
            'alamat' => 'Jl. Basuki Rahmat No. 100, Malang',
            'no_hp' => '081288227411',
            'email' => 'sales@stormx.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'UrbanWalk Shoes Distributor',
            'alamat' => 'Jl. Kalibata No. 11, Jakarta Selatan',
            'no_hp' => '081376002233',
            'email' => 'contact@urbanwalk.co.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'CottonSoft Apparel',
            'alamat' => 'Jl. Mawar No. 3, Sidoarjo',
            'no_hp' => '082199886610',
            'email' => 'support@cottonsoft.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'SharpLine Office Supply',
            'alamat' => 'Jl. Merdeka No. 5, Tangerang',
            'no_hp' => '081266001123',
            'email' => 'info@sharpline.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'PT InkFlow Indonesia',
            'alamat' => 'Jl. Ahmad Yani No. 25, Bandung',
            'no_hp' => '085277713211',
            'email' => 'contact@inkflow.co.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'NotePro Stationery',
            'alamat' => 'Jl. Wijaya Kusuma No. 9, Malang',
            'no_hp' => '087733211100',
            'email' => 'admin@notepro.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'PressMaster Office Tools',
            'alamat' => 'Jl. Adi Sucipto No. 60, Yogyakarta',
            'no_hp' => '081356410008',
            'email' => 'sales@pressmaster.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'FolderMax File Supplier',
            'alamat' => 'Jl. Kenanga No. 4, Surabaya',
            'no_hp' => '082288332109',
            'email' => 'support@foldermax.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'PureSkin Cosmetics',
            'alamat' => 'Jl. Braga No. 27, Bandung',
            'no_hp' => '081291114400',
            'email' => 'cs@pureskin.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'HydraGlow Beauty Supplier',
            'alamat' => 'Jl. Hayam Wuruk No. 8, Jakarta Barat',
            'no_hp' => '087855217650',
            'email' => 'admin@hydraglow.co.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'Radiance Care Distributor',
            'alamat' => 'Jl. Manggis No. 44, Bali',
            'no_hp' => '082177446688',
            'email' => 'info@radiancecare.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'PT SunGuard Dermacare',
            'alamat' => 'Jl. Dipatiukur No. 19, Bandung',
            'no_hp' => '081399885200',
            'email' => 'support@sunguard.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('supplier')->insert([
            'nama' => 'HairCare Essentials',
            'alamat' => 'Jl. Anggrek No. 22, Medan',
            'no_hp' => '082361517790',
            'email' => 'contact@haircare.id',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
