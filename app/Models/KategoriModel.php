<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table = 'm_kategori'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'kategori_id'; // Pastikan sesuai dengan primary key di tabel

    public $incrementing = false; // Karena kategori_id bukan auto-increment
    protected $keyType = 'string'; // Jika kategori_id berupa string

    public $timestamps = true; 
    const CREATED_AT = 'created_at'; 
    const UPDATED_AT = 'updated_at'; 

    protected $fillable = [
        'kategori_id',
        'kategori_kode',
        'kategori_nama',
        'created_at',
        'updated_at'
    ];
}
