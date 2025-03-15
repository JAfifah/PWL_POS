<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori.index');
    }

    public function create()
    {
        return view('kategori.create'); // Menampilkan form input kategori
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kodekategori' => 'required|string|max:10',
            'namakategori' => 'required|string|max:50',
        ]);

        // Simpan data ke database
        KategoriModel::create([
            'kategori_kode' => $request->kodekategori,
            'kategori_nama' => $request->namakategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function data()
    {
        return datatables(KategoriModel::query())->toJson();
    }

}
