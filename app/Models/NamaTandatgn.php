<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaTandatgn extends Model
{
    use HasFactory;

    protected $table = 'nama_tandatgn';

    protected $fillable =[
    'nama_tandatgn',
    'jabatan',
    'nip',
    ];

}
