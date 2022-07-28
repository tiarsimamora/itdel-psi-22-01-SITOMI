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
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->bigIncrements('id_konsultasi');
            $table->Integer('id_pengguna')->nullable();
            $table->string('isi_pesan',1000);
            $table->string('isi_balasan',1000)->nullable();
            $table->timestamp('tanggal_konsultasi');        
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
        Schema::dropIfExists('konsultasi');
    }
};


