<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    /** @use HasFactory<\Database\Factories\TransportasiFactory> */
    use HasFactory;

    protected $fillable = ['kode','nama', 'jenis', 'kapasitas'];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'transportasi_id');
    }
    
}
