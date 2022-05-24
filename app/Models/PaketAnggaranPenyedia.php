<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketAnggaranPenyedia extends Model
{
    use HasFactory;

    protected $fillable = ['koderup','id_rup_client','kodekomponen','kodekegiatan','pagu','mak','sumberdana','kodeobjekakun','tahun_anggaran_dana'];
}
