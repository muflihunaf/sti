<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLaporan extends Model
{
    use HasFactory;

    protected $fillable = ['laporan_id','judul','deskripsi','instansi_id','kategori_id','status'];
}
