<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pembaca')->unique();
            $table->string('nama_peminjam')->nullable();
            $table->integer('judul_buku')->default(50);
            $table->date('tanggal_peminjam')->nullable();
            $table->integer('berapa_buku')->default(5);
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
        Schema::dropIfExists('perpustakaan');
    }
}
