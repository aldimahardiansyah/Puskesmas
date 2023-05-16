<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getAll()
    {
        $data = [
            ['id' => 1, 'nama' => 'Udin', 'alamat' => 'Bandung', 'tgl_lahir' => '2000-01-01', 'jk' => 'l', 'telp' => '08123456789'],
            ['id' => 2, 'nama' => 'Ucup', 'alamat' => 'Jakarta', 'tgl_lahir' => '2000-01-01', 'jk' => 'l', 'telp' => '08123456789'],
            ['id' => 3, 'nama' => 'Euis', 'alamat' => 'Bandung', 'tgl_lahir' => '2000-01-01', 'jk' => 'p', 'telp' => '08123456789'],
            ['id' => 4, 'nama' => 'Maman', 'alamat' => 'Jakarta', 'tgl_lahir' => '2000-01-01', 'jk' => 'l', 'telp' => '08123456789'],
            ['id' => 5, 'nama' => 'Siti', 'alamat' => 'Bandung', 'tgl_lahir' => '2000-01-01', 'jk' => 'p', 'telp' => '08123456789'],
            ['id' => 6, 'nama' => 'Rudi', 'alamat' => 'Jakarta', 'tgl_lahir' => '2000-01-01', 'jk' => 'l', 'telp' => '08123456789'],
            ['id' => 7, 'nama' => 'Rina', 'alamat' => 'Bandung', 'tgl_lahir' => '2000-01-01', 'jk' => 'p', 'telp' => '08123456789'],
            ['id' => 8, 'nama' => 'Roni', 'alamat' => 'Jakarta', 'tgl_lahir' => '2000-01-01', 'jk' => 'l', 'telp' => '08123456789'],
            ['id' => 9, 'nama' => 'Rina', 'alamat' => 'Bandung', 'tgl_lahir' => '2000-01-01', 'jk' => 'p', 'telp' => '08123456789'],
            ['id' => 10, 'nama' => 'Roni', 'alamat' => 'Jakarta', 'tgl_lahir' => '2000-01-01', 'jk' => 'l', 'telp' => '08123456789'],
        ];

        return $data;
    }
}
