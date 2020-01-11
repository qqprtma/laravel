<?php
use App\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = new Kelas;
        $kelas->judul = 'belajar php ';
        $kelas->jumlah_siswa = 40;
        $kelas->nama_sekolah = 'SMK Assalaam Bandung';
        $kelas->nama_siswa = 'Susan Nur Aini';
        $kelas->status = 1;
        $kelas->save();
    }
}
