<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuboutputMasterRup extends Model
{

    use HasFactory;

    protected $fillable = [
        "id_program",
        "id_kegiatan",
        "id_output",
        "id_table",
        "kode_suboutput_string",
        "nama",
        "pagu",
        "is_deleted",
        "id_client"
    ];
}
