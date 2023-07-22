<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'nidn',
        'nama_dosen',
        'dosen_jurusan', 
        'jenis_kelamin',
        'no_telp',
    ];
}
