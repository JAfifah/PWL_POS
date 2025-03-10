<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel; // Pastikan menggunakan UserModel yang benar
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() 
    {
        $user = UserModel::where('username', 'manager')->firstOrFail();
        return view('user', ['data' => $user]);
    }
}
