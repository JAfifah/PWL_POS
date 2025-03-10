<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel; // Pastikan menggunakan UserModel yang benar
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() 
    {
        $userCount = UserModel::where('level_id', 2)->count(); 
        return view('user', ['data' => $userCount]); // Kirim data ke tampilan
    }
}