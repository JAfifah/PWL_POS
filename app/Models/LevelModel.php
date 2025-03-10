<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Sesuaikan dengan tabel di database
    protected $primaryKey = 'level_id'; // Sesuaikan dengan primary key tabel
    public $timestamps = false; // Jika tidak ada created_at & updated_at
}
