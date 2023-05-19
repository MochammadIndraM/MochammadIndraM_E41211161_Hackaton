<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Energi extends Model
{
    use HasFactory;
    protected $table = 'energi'; // Ubah nama tabel sesuai dengan migrasi ('budayas')
    protected $primaryKey = 'id'; // Ubah primary key jika perlu
    protected $fillable = [
        'nama', 'no_meter', 'tahun_buat', 'tahun_ganti' // Tambahkan kolom 'tahun_ditemukan'
    ];
}
