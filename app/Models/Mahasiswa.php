<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
    ];

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
