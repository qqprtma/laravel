<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrammediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grammedia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pembeli')->unique();
            $table->integer('harga_buku')->default(50);
            $table->date('tanggal_pembelian')->nullable();
            $table->integer('berapa_buku')->default(5);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('grammedia');
    }
}
