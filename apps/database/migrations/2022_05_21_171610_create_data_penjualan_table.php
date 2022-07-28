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
        Schema::create('data_penjualan', function (Blueprint $table) {
            $table->bigIncrements('id_penjualan');
            $table->integer('id_pengguna')->nullable();
            $table->integer('id_pesanan')->nullable();
            $table->integer('id_obat')->nullable();
            $table->integer('jumlah_obat');
            $table->integer('total_harga');
            $table->timestamp('tanggal_penjualan');
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
        Schema::dropIfExists('data_penjualan');
    }
};
