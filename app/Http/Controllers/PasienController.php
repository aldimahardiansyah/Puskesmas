<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::getAll();

        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required|date',
            'jk' => 'required|in:l,p',
            'telp' => 'required|numeric',
        ]);

        $pasiens = Pasien::getAll();

        $data = [
            'id' => count($pasiens) + 1,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'telp' => $request->telp,
        ];

        array_push($pasiens, $data);

        return view('pasien.index', compact('pasiens'))->with('success', 'Data berhasil ditambahkan!');
    }
}
