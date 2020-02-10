<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\wali;
use App\Dosen;
use App\Hobi;
class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();
        
        #membuat data dosen
        $dosen = Dosen::create(array(
			'nama' => 'Yulianto',
			'nipd' => '1234567890'));

		$this->command->info('Data dosen telah diisi!');

        #membuat data mahasiswa 
        $novay = Mahasiswa::create(array(
			'nama' => 'Noviyanto Rachmadi',
			'nim'  => '1015015072',
			'id_dosen' => $dosen->id));

        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nim'  => '1015015088',
            'id_dosen' => $dosen->id));
    
        $ayu = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu',
            'nim'  => '1015015078',
            'id_dosen' => $dosen->id));

        #membuat data wali
        Wali::create(array(
            'nama' => 'Tiara',
            'id_mahasiswa' => $novay->id
        ));
        
        Wali::create(array(
            'nama' => 'ara',
            'id_mahasiswa' => $dije->id
        ));

        Wali::create(array(
            'nama' => 'areng',
            'id_mahasiswa' => $ayu->id
        ));
        #informasi ketika semua wali telah diisi
        $this->command->info('Data mahasiswa dan wali telah diisi');

        #membuat data tabel hobi
        $mandi_hujan = Hobi::create(array('hobi'=>'mandi hujan'));
        $baca_buku = Hobi::create(array('hobi'=>'baca buku'));

        $novay->hobi()->attach($mandi_hujan->id);
        $novay->hobi()->attach($baca_buku->id);
        $dije->hobi()->attach($mandi_hujan->id);
        $ayu->hobi()->attach($baca_buku->id);

        $this->command->info('Data mahasiswa dan hobi telah diisi');
    }
}
