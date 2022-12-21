<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    use HasFactory;

    protected $fillable =   [
      'nama',
    'merk',
    'deskripsi',
    'tanggal',
    'harga',
    'jumlah',
    'foto',
    'updated_a',
    'created_at'



    ];

}
