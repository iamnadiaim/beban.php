<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BebanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Beban::create([
            "tanggal" => "",
            "nama" => "",
            "kategori" => "",
            "jumlah" => "",
            "total_biaya" => "",
        ]);
    }
}
