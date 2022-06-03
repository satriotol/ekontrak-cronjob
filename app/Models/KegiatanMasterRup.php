<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanMasterRup extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_program',
        'id_table',
        'kode_kegiatans',
        'nama',
        'pagu',
        'is_deleted',
        'id_client',
        'id_satker',
        'tahun_anggaran'
    ];
}
