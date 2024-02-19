<?php

namespace App\Models\rektor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuans'; // Make sure to set the correct table name if it's different

    protected $fillable = [
        'unit_fakultas',
        'judul_kegiatan',
        'total_anggaran',
        'waktu_pelaksanaan',
        'kriteria',
    ];
}
