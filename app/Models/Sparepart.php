<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;
    protected $table ='spareparts';
    protected $fillable =   [
            'nama_sparepart',
            'merk_sparepart',
            'deskripsi',
            'stok',
            'harga_jual',
            'foto'

    ];
}
