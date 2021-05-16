<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;

    protected $fillable = ['lokasi_id','nama_instansi'];

    public function get_lokasi()
    {
        return $this->hasOne(\App\Models\Lokasi::class, 'id','lokasi_id');
    }
}
