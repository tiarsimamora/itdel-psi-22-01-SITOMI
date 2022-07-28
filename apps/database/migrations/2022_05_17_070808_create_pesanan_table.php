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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->bigIncrements('id_pesanan');
            $table->integer('id_pengguna');
            $table->integer('id_obat');
            $table->string('nama_obat');
            $table->integer('jumlah_obat');
            $table->timestamp('tanggal_pesanan');      
            $table->integer('total_harga')->nullable();
            $table->enum('status', ['menunggu', 'tolak', 'selesai', 'terima'])->nullable();
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
        Schema::dropIfExists('pesanan');
    }
};
