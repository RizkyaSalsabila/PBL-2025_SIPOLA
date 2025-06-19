<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahLombaModel extends Model
{
    protected $table = 'tambah_lomba';
    protected $primaryKey = 'id_tambahLomba';

    protected $fillable = [
        'nama_lomba',
        'kategori_lomba',
        'tingkat_lomba',
        'jenis_lomba',
        'penyelenggara_lomba',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'pamflet_lomba',
        'status_verifikasi',
        'link_pendaftaran',
        'user_id',
        'bidang_minat',
        
        // ✅ Tambahan kolom baru
        'biaya_pendaftaran',
        'hadiah',
        'format_lomba',
        'tipe_lomba',
    ];
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function infoLomba() {
        return $this->hasOne(InfoLombaModel::class, 'id_lomba');
    }

    public function rekomendasi() {
        return $this->hasMany(RekomendasiModel::class, 'id_lomba');
    }
}