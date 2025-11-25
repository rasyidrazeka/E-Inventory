<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProdukModel extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = ['kategori_id', 'supplier_id', 'nama', 'sku', 'stok', 'min_stok', 'unit', 'harga', 'foto', 'created_at', 'updated_at'];

    public function kategori():BelongsTo{
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'id');
    }
    public function supplier():BelongsTo{
        return $this->belongsTo(SupplierModel::class, 'supplier_id', 'id');
    }

    public function produk_masuk(){
        return $this->hasMany(ProdukMasukModel::class, 'produk_id', 'id');
    }
    public function produk_keluar(){
        return $this->hasMany(ProdukKeluarModel::class, 'produk_id', 'id');
    }
    public function prediksi_stok(){
        return $this->hasMany(PrediksiStokModel::class, 'produk_id', 'id');
    }
}
