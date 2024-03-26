<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'Buku';
    protected $primarikey = 'BukuID';
    public $timestamps = true;
    protected $fillable = 
    [
        'judul',
        'penulis',
        'penerbit',
        'TahunTerbit'
    ];

    public function ulasanbuku()
    {
        return $this->hasMany(UlasanBuku::class, 'BukuID');
    }

    public function koleksipribadi()
    {
        return $this->hasMany(KoleksiPribadi::class, 'BukuID');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'BukuID');
    }

    public function kategoribuku_relasi()
    {
        return $this->hasMany(KategoriBuku_Relasi::class, 'BukuID');
    }
}
