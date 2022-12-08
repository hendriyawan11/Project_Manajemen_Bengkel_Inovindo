<?php
namespace Database\Seeders;

use App\Models\Servis;
use App\Models\Service;
use App\Models\Services;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{

    public function run()
    {
Schema::disableForeignKeyConstraints();
Service::truncate();
Schema::enableForeignKeyConstraints();

        $data =[
            ['jenis_servis' => 'Tune Up', 'deskripsi' => 'ini adalah servis ringan', 'harga'=>70.000],
            ['jenis_servis' => 'CVT', 'deskripsi' => 'ini adalah servis cvt agar tenaga lebih optimal', 'harga'=>20.000],
            ['jenis_servis' => 'Ganti Oli', 'deskripsi' => 'ini adalah ganti oli tanpa service', 'harga' => 50.000],
            ['jenis_servis' => 'Overhoul','deskripsi' => 'ini adalah turun mesin agar kendaraan anda kembali normal',  'harga'=>500.000],
        ];

        foreach ($data as $value) {
            Service::insert([
                'jenis_servis' => $value['jenis_servis'],
                'harga' => $value['harga'],
                'deskripsi' => $value['deskripsi']
            ]);
        }
    }
}
