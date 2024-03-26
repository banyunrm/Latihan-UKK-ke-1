<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;
    protected $table = 'KategoriBuku';
    protected $primarikey = 'KategoriID';
    public $timestamps = true;
    protected $fillable =
    [
        'NamaKategori'
    ];

    public function kategoribuku_relasi()
    {
        return $this->hasMany(KategoriBuku_Relasi::class, 'KategoriID');
    }
}
