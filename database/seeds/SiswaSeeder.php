<?php
use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = new Siswa;
        $siswa->nama = 'Susan Nur Aini ';
        $siswa->nis = '20030113';
        $siswa->kelas = 'XI RPL 3';
        $siswa->jurusan = 'RPL(Rekayasa Perangkat Lunak)';
        $siswa->alamat = 'Jl. Lewipanjang, Kebonlega II Rt/01 Rw/01';
        $siswa->tanggal_lahir = '2003-01-13';
        $siswa->save();
    }
}
