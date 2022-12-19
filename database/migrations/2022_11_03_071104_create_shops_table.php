<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('merk');
<<<<<<< HEAD
            $table->longText('deskripsi');
            $table->decimal('harga');
            $table->string('jumlah');
            $table->date('tanggal');
=======
            $table->longText('deskripsi')->nullable();
            $table->decimal('harga')->nullable();
            $table->string('jumlah')->nullable();
>>>>>>> fdf896b2638788f68382c9237461fc12aaa42f3a
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
};
