<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'deskripsi', 'created_at', 'updated_at'];

    public function produk(){
        return $this->hasMany(ProdukModel::class, 'kategori_id', 'id');
    }
}
