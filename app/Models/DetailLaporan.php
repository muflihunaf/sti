<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLaporan extends Model
{
    use HasFactory;

    protected $fillable = ['laporan_id','judul','deskripsi','instansi_id','kategori_id','lampiran','status'];

    public function get_instansi()
    {
        return $this->hasOne(\App\Models\Instansi::class, 'id','instansi_id');
    }
}
