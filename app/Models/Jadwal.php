<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalFactory> */
    use HasFactory;

    protected $fillable = ['kode', 'asal', 'tujuan', 'transportasi_id'];

    public function transportasi()
    {
        return $this->belongsTo(Transportasi::class, 'transportasi_id');
    }
}
