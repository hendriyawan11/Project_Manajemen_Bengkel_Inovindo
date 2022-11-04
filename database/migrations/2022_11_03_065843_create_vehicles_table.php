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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('konsumen');
            $table->string('merk');
            $table->string('no_polisi')->unique();
            $table->string('jenis');
            $table->string('no_rangka')->unique();
            $table->string('no_mesin')->unique();;
            $table->date('tahun_pembuatan');
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
        Schema::dropIfExists('vehicles');
    }
};
