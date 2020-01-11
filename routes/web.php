<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Pembaca;

Route::get('/', function () {
    //return view('welcome');
    return Pembaca::all();
});

Route::get('/name', function () {
    return ('Nama saya SUSAN NUR AINI');
});

Route::get('/kls', function () {
    return ('Saya duduk di kelas XI');
});

Route::get('/alamat', function () {
    return ('Alamat saya di Lewipanjang');
});

Route::get('/sekolah', function () {
    return ('Sekolah saya di Smk Assalaam Bandung');
});

Route::get('/hobi', function () {
    return ('Hobi saya adalah belajar');
});

Route::get('/variable', function () {
    $data1 = "Ini variable data 1";
    $data2 = "Ini variable data 2";
    $data3 = "Ini variable data 3";
    $data4 = "Ini variable data 4";
    $data5 = "Ini variable data 5";
    return $data1.'<br>'.$data2. '<br>'.$data3. '<br>'.$data4.'<br>'.$data5;
});

Route::get('angkot/{jurusan}/{warna}', function (){
    $jurusan = 'Cibaduyut - Karang setra';
    $data = 'Angkot jurusan:';
    $data1 = 'warna:';
    $warna = 'Hijau';
    return $data .' '.$jurusan .'<br>'.$data1 .' '.$warna;
});

Route::get('user/{nama}/{alamat}/{nomor}', function ($nama, $alamat, $nomor){
    return 'Halo '. $nama. ' yang beralamat di '.$alamat. ' nomor ' .$nomor;
});

Route::get('user/{nama}/{nilai?}', function($nama, $nilai = 'nilai'){

    if($nilai <= 100 && $nilai >= 50){
        echo 'Grade A';
    }
    elseif($nilai <= 49 && $nilai >= 30){
        echo 'Grade B';
    }
    elseif($nilai <= 39 && $nilai >= 20){
        echo 'Grade C';
    }
    elseif($nilai >= 1 && $nilai <= 19 ){
        echo 'Grade D';
    }
    else {
        echo 'Kamu belum mempunyai nilai dan tidak mempunyai grade!!';
    }
    return '<br> Halo '.$nama. ' nilai kamu '.$nilai;
});