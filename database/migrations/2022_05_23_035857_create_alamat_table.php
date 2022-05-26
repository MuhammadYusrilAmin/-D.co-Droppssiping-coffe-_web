<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat', function (Blueprint $table) {
            $table->bigIncrements('id_alamat');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_tujuan', 20);
            $table->string('no_telp', 15);
            $table->string('provinsi', 20);
            $table->string('kabupaten', 20);
            $table->string('kecamatan', 20);
            $table->string('desa', 20);
            $table->string('detail_alamat', 20);
            $table->string('kode_pos', 10);
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
        Schema::dropIfExists('alamat');
    }
}
