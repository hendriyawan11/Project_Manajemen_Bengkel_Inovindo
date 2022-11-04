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
        Schema::create('order_spareparts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sparepart', 100);
            $table->string('merk');
            $table->longText('deskripsi');
            $table->integer('jumlah');
            $table->decimal('harga');
            $table->decimal('subtotal');
            $table->decimal('dibayar');
            $table->decimal('kembalian');
            $table->string('hapus');
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
        Schema::dropIfExists('order_spareparts');
    }
};
