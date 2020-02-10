<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PembacaSeeder::class);
        // $this->call(KelasSeeder::class);
        // $this->call(SiswaSeeder::class);
        // $this->call(GajiSeeder::class);
         $this->call('RelasiSeeder');
        $this->command->info('RelasiSeeder berhasil');
    }
}
