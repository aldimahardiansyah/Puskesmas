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
                "nama" => "Andi",
                "jk" => 'l',
                "tgl_lahir" => "12/03/2002",
                "alamat" => "Bogor",
                "telp" => "08123456789"
            ],
            [
                "nama" => "Sifa",
                "jk" => 'p',
                "tgl_lahir" => "02/03/2003",
                "alamat" => "Depok",
                "telp" => "08123456789"
            ],
            [
                "nama" => "Latif",
                "jk" => 'l',
                "tgl_lahir" => "10/06/2002",
                "alamat" => "Jakarta",
                "telp" => "08123456789"
            ],
        ];
    }
}
