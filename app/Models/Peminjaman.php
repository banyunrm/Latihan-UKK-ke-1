<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'Peminjaman';
    protected $primarikey = 'PeminjamanID';
    public $timestamps = true;
    protected $fillable = 
    [
        'UserID',
        'BukuID',
        'TanggalPeminjaman',
        'TanggalPengembalian',
        'StatusPeminjaman'
    ];

    public function user()
    {
        return $this->belongTo(User::class, 'UserID');
    }

    public function buku()
    {
        return $this->belongTo(Buku::class, 'BukuID');
    }
}
