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
        Schema::create('laporan_penjualan', function (Blueprint $table) {
            $table->bigIncrements('id_laporan');
            $table->integer('id_penjualan')->nullable();
            $table->integer('id_pengguna')->nullable();
            $table->string('nama_obat');
            $table->integer('jumlah_obat');
            $table->timestamp('tanggal_penjualan');
            $table->integer('total_penjualan');
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
        Schema::dropIfExists('laporan_penjualan');
    }
};
