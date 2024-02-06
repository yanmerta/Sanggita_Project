<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        // 'waktu_pelaksanaan',
        'created_at',
        'updated_at',
    ];

    use SoftDeletes;
}
