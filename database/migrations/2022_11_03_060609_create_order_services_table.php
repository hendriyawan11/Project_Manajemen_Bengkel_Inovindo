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
        Schema::create('order_services', function (Blueprint $table) {
            $table->id();
            $table->string('konsumen');
            $table->string('kendaraan');
            $table->date('tanggal');
            $table->string('jenis_servis')->require();
            $table->string('sparepart');
            $table->string('qty_sparepart');
            $table->string('keluhan');
            $table->string('no_polisi');
            $table->string('jarak_tempuh');
            $table->decimal('total_sparepart');
            $table->decimal('total_servis');
            $table->decimal('bayar');
            $table->decimal('kembalian');
            $table->string('action');
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
        Schema::dropIfExists('order_services');
    }
};
