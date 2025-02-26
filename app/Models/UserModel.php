<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // Nama tabel
    protected $primaryKey = 'user_id'; // Primary key tabel

    // Jika tabel tidak memiliki timestamps (created_at & updated_at)
    public $timestamps = false;

    // Definisikan kolom yang dapat diisi
    protected $fillable = ['username', 'nama', 'level_id'];
}
