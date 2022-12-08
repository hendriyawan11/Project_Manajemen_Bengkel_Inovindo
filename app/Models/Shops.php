<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    use HasFactory;

    protected $table= 'shops';
    protected $fillable =   [
        'merk',
        'deskripsi',
        'harga',
        'jumlah',
        'foto'


    ];
}
