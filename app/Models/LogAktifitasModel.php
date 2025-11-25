<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogAktifitasModel extends Model
{
    use HasFactory;

    protected $table = 'log_aktifitas';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'aksi', 'nama_tabel', 'record_id', 'deskripsi', 'created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
