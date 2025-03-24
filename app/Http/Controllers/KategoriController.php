<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use DataTables;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori.index');
    }

    public function create()
    {
        return view('kategori.create'); // Menampilkan form tambah kategori
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodekategori' => 'required|string|max:10',
            'namakategori' => 'required|string|max:50',
        ]);

        KategoriModel::create([
            'kategori_kode' => $request->kodekategori,
            'kategori_nama' => $request->namakategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function data()
{
    $kategori = KategoriModel::select(['kategori_id', 'kategori_kode', 'kategori_nama']);

    return DataTables::of($kategori)
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
            return '
                <a href="' . route('kategori.edit', $row->kategori_id) . '" class="btn btn-sm btn-warning">Edit</a>
                <button class="btn btn-sm btn-danger delete-btn" data-id="' . $row->kategori_id . '">Delete</button>
            ';
        })
        ->rawColumns(['action'])
        ->make(true);
}


    public function edit($id)
    {
        $kategori = KategoriModel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kodekategori' => 'required|string|max:10',
            'namakategori' => 'required|string|max:50',
        ]);

        $kategori = KategoriModel::findOrFail($id);
        $kategori->update([
            'kategori_kode' => $request->kodekategori,
            'kategori_nama' => $request->namakategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kategori = KategoriModel::findOrFail($id);
        $kategori->delete();

        return response()->json(['message' => 'Kategori berhasil dihapus!']);
    }
    
}
