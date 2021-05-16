<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_laporans', function (Blueprint $table) {
            $table->id();
            $table->string('laporan_id');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('lokasi_id');
            $table->string('instansi_id');
            $table->string('kategori_id');
            $table->string('lampiran');
            $table->string('status');
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
        Schema::dropIfExists('detail_laporans');
    }
}
