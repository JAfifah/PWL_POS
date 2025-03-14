<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori.index');
    }

    public function data()
    {
        $data = KategoriModel::select(['kategori_id', 'kategori_kode', 'kategori_nama', 'created_at']);
        return DataTables::of($data)->make(true);
    }
}
