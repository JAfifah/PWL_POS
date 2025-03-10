<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        // Ambil semua data user dengan relasi ke level
        $user = UserModel::with('level')->get();

        // Cek data dengan debug dump (bisa dihapus setelah tes)
        // dd($user); 
        
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request) {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
    
        return redirect('/user');
    }

    public function ubah($id) {
        $user = UserModel::find($id);  // Pastikan nama model sesuai
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan(Request $request) {
        $user = UserModel::find($request->user_id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;
        
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
    
        $user->save();
    
        return redirect('/user')->with('success', 'User berhasil diperbarui');
    }
    
    public function hapus($id) {
        $user = UserModel::find($id);
        if ($user) {
            $user->delete();
            return redirect('/user')->with('success', 'User berhasil dihapus');
        }
        return redirect('/user')->with('error', 'User tidak ditemukan');
    }
    
    
    
}
