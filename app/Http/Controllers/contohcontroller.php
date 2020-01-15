<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohcontroller extends Controller
{
   public function latihan2()
{
    $a = 'Susan';
    $b = 'Nur Aini';

 return 'Nama saya adalah  ' .$a.' '.$b;
}

public function latihan3()
{
    $a = 'Susannur';
    return view('test', compact('a'));
}

public function latihan4()
{
    $a = 'Susannuraini';
    return view('test2',['nama'=>$a]);
}
public function latihan5()
{
    $a = 'Susannuraini';
    $b = 'Islam';
    $c = 'Perempuan';
    $d = 'Jl. Lewipanjang, kebonlega II Rt/01 Rw/01 ';
    $e = 'Smk Assalaam Bandung';
    $f = 'XI';
    $g = 'RPL(Rekayasa Perangkat Lunak)';
    $h = 'Bermain';
    $i = '17+';
    return view('biodata',['nama'=>$a,'agama'=>$b,'js'=>$c,'alamat'=>$d,
    'sekolah'=>$e,'kelas'=>$f,'jurusan'=>$g,'hobi'=>$h,'umur'=>$i]);
}
public function menu($a)
{
    return view('menu', compact('a'));
}
public function apa($a = null, $b = null,$c = null){
   
    if(isset($a)){
        $a="Anda memesan $a";
    }
    if(isset($b)){
    $b = "& $b";
    }
    if(!isset($a)){
        $a= "Anda belum memesan sesuatu";
    }
    if(isset($c)){
        if($c >= 25000){
            echo ", Paket Jumbo";
    }
        elseif($c <= 20000 && $c >= 15000){
            echo ", Paket Medium";
    }
        elseif($c <= 15000 && $c >= 1){
            echo ", Paket Small";
        }
    else {
        echo 'Harga tidak valid!!';
    }
    return view('menu', compact('a', 'b','c'));
    }
}
}
