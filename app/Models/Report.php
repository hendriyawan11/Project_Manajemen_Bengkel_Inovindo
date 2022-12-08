<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable =   [
        'tanggal',
        'jenis_transaksi',
        'total',
        'keterangan'

    ];
}
