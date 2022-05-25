<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomponenMasterRup extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_program',
        'id_kegiatan',
        'id_output',
        'id_suboutput',
        'id_table',
        'kode_komponen_string',
        'nama',
        "pagu",
        "is_deleted",
        "id_client"
    ];
}
