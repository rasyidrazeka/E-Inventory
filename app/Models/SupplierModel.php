<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'alamat', 'no_hp', 'email', 'created_at', 'updated_at'];

    public function produk(){
        return $this->hasMany(ProdukModel::class, 'supplier_id', 'id');
    }
}
