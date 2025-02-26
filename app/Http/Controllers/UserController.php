<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Data yang akan diupdate
        $data = [
            'nama' => 'Pelanggan Pertama'
        ];

        UserModel::where('username', 'customer-1')->update($data); // Update data user

        // Ambil semua data dari tabel m_user
        $user = UserModel::all();

        return view('user', ['data' => $user]);
    }
}
