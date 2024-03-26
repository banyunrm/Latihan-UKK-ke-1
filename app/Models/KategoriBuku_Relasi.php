<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku_Relasi extends Model
{
    use HasFactory;
    protected $table = 'KategoriBuku_Relasi';
    protected $primarikey = 'KategoriBukuID';
    public $timestamps = true;
    protected $fillable = 
    [
        'BukuID',
        'KategoriID'
    ];

    public function buku()
    {
        return $this->belongTo(Buku::class, 'BukuID');
    }

    public function kategoribuku()
    {
        return $this->belongTo(KategoriBuku::class, 'KategoriID');
    }
}
