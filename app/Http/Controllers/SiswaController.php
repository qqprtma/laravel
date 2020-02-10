<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
public function index(){
    $siswa = Siswa::all();
    return $siswa;
}
public function show($id){
    $siswa = Siswa::find($id);
    return $siswa;
}
public function buat_data(){
    $siswa = Siswa::find(2);
    $siswa = new Siswa;
    $siswa->nama = 'Susan Nur Aini';
    $siswa->nis = '20030113' ;
    $siswa->kelas = 'XI RPL 3';
    $siswa->jurusan = "RPL";
    $siswa->alamat = 'Jl. Lewipanjang, Kebonlega II Rt/01 Rw/01';
    $siswa->tanggal_lahir = '2003-01-13';
    $siswa->save();
    return $siswa;
}
public function update($id,$nama,$nis,$tanggal_lahir){
    $siswa = Siswa::find(2);
    $siswa = new Siswa;
    $siswa->nama = 'Susan Nur Aini';
    $siswa->nis = '20030113' ;
    $siswa->kelas = 'XI RPL 3';
    $siswa->jurusan = "RPL";
    $siswa->alamat = 'Jl. Lewipanjang, Kebonlega II Rt/01 Rw/01';
    $siswa->tanggal_lahir = 'tanggal_lahir';
    $siswa->save();
    return $siswa;
}
public function delete(){
    $siswa=Siswa::find(2);
    $siswa->delete();
    return $siswa;
}
}
