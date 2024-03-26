<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiPribadi extends Model
{
    use HasFactory;
    protected $table = 'KoleksiPribadi';
    protected $primarikey = 'KoleksiID';
    public $timestamps = true;

    protected $fillable = [
        'UserID',
        'BukuID'
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
