<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramMasterRup extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_table',
        'kode_programs',
        'nama',
        'pagu',
        'is_deleted',
        'id_client',
        'id_satker',
        'tahun_anggaran'
    ];
}
