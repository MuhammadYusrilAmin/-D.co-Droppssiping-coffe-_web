<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_detail');
            $table->bigInteger('id_transaksi');
            $table->string('foto_barang', 20);
            $table->string('nama_barang', 50);
            $table->string('harga', 20);
            $table->string('jumlah', 20);
            $table->string('total_harga', 20);
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
        Schema::dropIfExists('detail_transaksi');
    }
}
