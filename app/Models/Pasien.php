<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    // hubungkan model ke table pasiens
    protected $table = 'pasiens';

    // menyebutkan field pada tabel yang boleh diisi.
    protected $fillable = ['nama', 'jk', 'tgl_lahir', 'alamat', 'telp'];
}
