<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembaca;

class Bukucontroller extends Controller
{
    public function index(){

        $buku = Pembaca::all();
        return $buku;
    }
    public function show($id1){

        $buku = Pembaca::find($id1);
        return $buku;
    }
    public function hitungbuku(){
        $buku = Pembaca::count();
        return $buku;
    }
    public function buat_data(){
        $buku = new Pembaca;
        $buku->judul = 'Belajar php 2';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Grammedia pustaka';
        $buku->synopsis = "saya....";
        $buku->status = 1;
        $buku->save();
        return $buku;

    }
    public function update($id){
        $buku=Pembaca::find($id);
        $buku = new Pembaca;
        $buku->judul = 'Belajar php 2';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Grammedia pustaka';
        $buku->synopsis = "saya....";
        $buku->status = 1;
        $buku->save();
        return $buku;
    }
    public function delete(){
        $buku=Pembaca::find(2);
        $buku->delete();
        return $buku;
    }
}

