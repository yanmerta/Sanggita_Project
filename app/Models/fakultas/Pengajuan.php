<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_fakultas',
        'judul_kegiatan',
        'total_anggaran',
        'waktu_pelaksanaan',
        'kriteria',
        'status',
    ];
}
