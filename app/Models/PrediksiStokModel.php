<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PrediksiStokModel extends Model
{
    use HasFactory;

    protected $table = 'prediksi_stok';
    protected $primaryKey = 'id';
    protected $fillable = ['produk_id', 'rata2_pemakaian_harian', 'prediksi_stok_habis', 'saran_restok', 'created_at', 'updated_at'];

    public function produk(): BelongsTo
    {
        return $this->belongsTo(ProdukModel::class, 'produk_id', 'id');
    }
}
