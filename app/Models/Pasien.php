<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getAll()
    {
        return [
            ['nama' => 'Udin', 'jk' => 'l', 'tgl_lahir' => '12/06/2002', 'alamat' => 'Bogor', 'telp' => '08123456789'],
            ['nama' => 'Siti', 'jk' => 'p', 'tgl_lahir' => '10/07/2003', 'alamat' => 'Depok', 'telp' => '08123456789'],
            ['nama' => 'Ali', 'jk' => 'l', 'tgl_lahir' => '12/09/2001', 'alamat' => 'Jakarta', 'telp' => '08123456789'],
        ];
    }
}
