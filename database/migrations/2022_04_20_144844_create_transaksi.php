<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            //$table->Integer('id_alamat', 15)->nullable();
            $table->date('tanggal');
            $table->string('total_pembayaran', 50);
            $table->string('jenis_pembayaran', 50);
            $table->string('status', 5);
            $table->string('biaya_pengiriman', 50);
            $table->string('jenis_pengiriman', 50);
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
        Schema::dropIfExists('transaksi');
    }
}
