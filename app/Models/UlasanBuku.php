<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanBuku extends Model
{
    use HasFactory;
    protected $table = 'UlasanBuku';
    protected $primarikey = 'UlasanID';
    public $timestamps = true;
    protected $fillable = [
        'UserID',
        'BukuID',
        'ulasan',
        'rating'
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
