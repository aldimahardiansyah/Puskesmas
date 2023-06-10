<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // menampilkan semua data pasien
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', [
            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {
        return view('pasien.create');
    }

    // method untuk menyimpan data ke database
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'telp' => 'required|numeric',
        ]);

        Pasien::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect('/pasien');
    }

    // method untuk menampilkan form edit pasien
    public function edit($id)
    {
        // cari pasien berdasarkan id
        $pasien = Pasien::find($id);

        return view('pasien.edit', [
            'pasien' => $pasien
        ]);
    }

    // method untuk mengupdate data pasien
    public function update($id, Request $request)
    {
        // validasi data
        $request->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'telp' => 'required|numeric',
        ]);

        // cari pasien berdasarkan id
        $pasien = Pasien::find($id);

        // simpan data perubahan
        $pasien->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        // kembalikan ke halaman daftar pasien
        return redirect('/pasien')->with('success', 'Data pasien berhasil diubah.');
    }

    // method untuk menghapus data pasien
    public function destroy(Request $request)
    {
        // hapus data
        Pasien::destroy($request->id);

        // kembalikan ke halaman daftar pasien
        return redirect('/pasien')->with('success', 'Data pasien berhasil dihapus.');
    }
}
