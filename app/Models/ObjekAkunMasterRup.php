<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjekAkunMasterRup extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_program',
        'id_kegiatan',
        'id',
        'kode_objekakund',
        'uraian_objekakun',
        'pagu',
        'is_deleted',
        'id_client'
    ];
}
