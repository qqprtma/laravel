<?php
use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = new Gaji;
        $gaji->nip = '01132003';
        $gaji->nama = 'Susan Nur Aini';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = 'Jl.Leuwipanjang';
        $gaji->jabatan = 'Manager';
        $gaji->jam_kerja = '08.00-17.00';
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = '01142004';
        $gaji->nama = 'Nisa';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = 'Jl.Cigondewah';
        $gaji->jabatan = 'Sekretaris';
        $gaji->jam_kerja = '08.00-17.00';
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = '01152005';
        $gaji->nama = 'Tiara';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = 'Jl.Cibaduyut';
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja = '08.00-17.00';
        $gaji->save();
    }

}
