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
            [
                "nama" => 'Andi',
                'jk' => 'l',
                'tgl_lahir' => '08/12/2002',
                'alamat' => 'Bogor',
                'telp' => '08123456789'
            ],
            [
                "nama" => 'Sifa',
                'jk' => 'p',
                'tgl_lahir' => '08/01/2002',
                'alamat' => 'Depok',
                'telp' => '08123456789'
            ],
            [
                "nama" => 'Amir',
                'jk' => 'l',
                'tgl_lahir' => '08/07/2001',
                'alamat' => 'Jakarta',
                'telp' => '08123456789'
            ],
        ];
    }
}
