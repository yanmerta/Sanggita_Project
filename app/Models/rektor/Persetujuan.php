<?php

namespace App\Models\rektor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persetujuan extends Model
{
    use HasFactory;

    protected $table = 'persetujuans';

    protected $fillable = [
        'unit_fakultas',
        'judul_kegiatan',
        'total_anggaran',
        'waktu_pelaksanaan',
        'kriteria',
        'status',

    ];

    public function pengajuans()
{
    return $this->hasMany(Pengajuan::class);
}
}
