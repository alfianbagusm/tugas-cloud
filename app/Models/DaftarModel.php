<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarModel extends Model
{
    use HasFactory;
    protected $table = 'daftar';
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'alamat',
        'nomer_hp',
        'email',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
    ];
}
