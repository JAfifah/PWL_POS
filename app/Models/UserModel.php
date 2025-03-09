<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // Nama tabel di database
    protected $primaryKey = 'user_id'; // Primary Key tabel

    // Definisi atribut yang bisa diisi secara massal
    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    // Jika tabel tidak memiliki kolom timestamps (created_at & updated_at)
    public $timestamps = false;
}
