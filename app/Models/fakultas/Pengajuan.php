<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_kegiatan',
        'total_anggaran',
        'waktu_pelaksanaan',
        'kriteria',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
