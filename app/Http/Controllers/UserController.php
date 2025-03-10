<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash; // Tambahkan ini

class UserController extends Controller
{
    public function index()
{
    $user = UserModel::firstOrNew([
        'username' => 'manager33'
    ], [
        'nama' => 'Manager Tiga Tiga',
        'password' => Hash::make('12345'),
        'level_id' => 2
    ]);

    $user->save(); // Simpan data ke database

    return view('user', ['data' => $user]);
}
}
