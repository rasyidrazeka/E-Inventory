<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProdukKeluarModel extends Model
{
    use HasFactory;

    protected $table = 'produk_masuk';
    protected $primaryKey = 'id';
    protected $fillable = ['produk_id', 'qty', 'tanggal_keluar', 'deskripsi', 'created_at', 'updated_at'];

    public function produk(): BelongsTo
    {
        return $this->belongsTo(ProdukModel::class, 'produk_id', 'id');
    }
}
