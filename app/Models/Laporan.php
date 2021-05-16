<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','tipe_laporan','tanggal'];

    public function get_detail()
    {
        return $this->hasOne(\App\Models\DetailLaporan::class, 'laporan_id','id');
    }
}
