<?php
use App\Pembaca;
use Illuminate\Database\Seeder;

class PembacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $buku = new Pembaca;
    $buku->judul = 'Belajar php 1';
    $buku->jumlah_halaman = 100;
    $buku->penerbit = 'Grammedia pustaka';
    $buku->synopsis = "saya....";
    $buku->status = 1;
    $buku->save();

    $buku = new Pembaca;
    $buku->judul = 'Belajar php 2';
    $buku->jumlah_halaman = 100;
    $buku->penerbit = 'Grammedia pustaka';
    $buku->synopsis = "saya....";
    $buku->status = 1;
    $buku->save();

    $buku = new Pembaca;
    $buku->judul = 'Belajar php 3';
    $buku->jumlah_halaman = 100;
    $buku->penerbit = 'Grammedia pustaka';
    $buku->synopsis = "saya....";
    $buku->status = 1;
    $buku->save();

    $buku = new Pembaca;
    $buku->judul = 'Belajar php 4';
    $buku->jumlah_halaman = 100;
    $buku->penerbit = 'Grammedia pustaka';
    $buku->synopsis = "saya....";
    $buku->status = 1;
    $buku->save();

    $buku = new Pembaca;
    $buku->judul = 'Belajar php 5';
    $buku->jumlah_halaman = 100;
    $buku->penerbit = 'Grammedia pustaka';
    $buku->synopsis = "saya....";
    $buku->status = 1;
    $buku->save();
    }
}
