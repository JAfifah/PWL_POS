<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Data yang akan dimasukkan
        $data = [
            'level_id' => 2,
            'username' => 'manager tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];

        // Insert data ke database
        UserModel::create($data);

        // Mengambil semua data user
        $user = UserModel::all();

        // Menampilkan data di view
        return view('user', ['data' => $user]);
    }
}
