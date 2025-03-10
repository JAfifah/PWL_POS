<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Membuat user baru
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager 11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        // Mengubah username
        $user->username = 'manager12';

        // Menyimpan perubahan
        $user->save();

        // Mengecek perubahan dengan wasChanged()
        $wasChanged = $user->wasChanged(); // true
        $wasChangedUsername = $user->wasChanged('username'); // true
        $wasChangedMulti = $user->wasChanged(['username', 'level_id']); // true
        $wasChangedName = $user->wasChanged('name'); // false
        $wasChangedMultiCheck = $user->wasChanged(['name', 'username']); // true

        // Debugging output
        dd([
            'wasChanged' => $wasChanged,
            'wasChangedUsername' => $wasChangedUsername,
            'wasChangedMulti' => $wasChangedMulti,
            'wasChangedName' => $wasChangedName,
            'wasChangedMultiCheck' => $wasChangedMultiCheck,
        ]);
    }
}
