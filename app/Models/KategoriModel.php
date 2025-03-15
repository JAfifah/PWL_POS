<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table = 'm_kategori'; // Nama tabel di database
    protected $primaryKey = 'kategori_id';
    public $incrementing = false;
    protected $keyType = 'string';

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
