<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
 public function pass(){
     $nama = 'Susan Nur Aini';
     $alamat = 'Jl. Lewipanjang';
     return view('latihan', compact('nama','alamat'));
 }
 public function pass1(){
    $gaji = 2000000;
    return view('latihan1',['penghasilan'=>$gaji]); 
 }
 public function status($status = 'jomblo'){
    //dd($status);
    return view('latihan2', compact('status'));
 }
 public function loop(){
     $buku = [
    ['judul' => 'Bangkit dari remedial','penerbit' => 'Erlangga',
         'harga'=>100000, 'penulis'=>'Aku yang suka remedial'
    ],
    ['judul' => 'Tips move on dari kamu','penerbit' => 'Erlangga',
         'harga'=>150000, 'penulis'=>'susan'
    ],
    ['judul' => 'Suara hati seorang istri','penerbit' => 'Erlangga',
         'harga'=>200000, 'penulis'=>'susannur'
    ],
    ];
    return view('latihan3', compact('buku'));
 }
}
