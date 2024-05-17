<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'surat_masuk';

    protected $fillable = [

    'id_kop',
    'tanggal',
    'no_surat',
    'asal_surat',
    'perihal',
    'disp1',
    'disp2',
    'id_tandatangan',
    'image',
    ];
}
