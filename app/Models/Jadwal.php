<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalFactory> */
    use HasFactory;

    protected $fillable = ['kode', 'asal', 'tujuan'];

    public function transportasi()
    {
        return $this->hasMany(Jadwal::class, 'jadwal_id');
    }
}
