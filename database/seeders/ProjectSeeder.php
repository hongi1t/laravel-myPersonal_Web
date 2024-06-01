<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Project 1: OkeSEP!',
                'description' => 'Proyek aplikasi untuk mempermudah semua pelanggan percetakan SEP(Setengah
                Enam Pagi) dalam mememuhi kebutuhan percetakan mereka. Melayani dengan sepenuh hati',
                'link' => 'https://bit.ly/3ViRor1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project 2: Unrealesed Novel',
                'description' => 'Proyek novel yang terinspirasi dari cerita teori penjelajahan beda dimensi oleh ATEEZ dan Straykids.
                Belum selesai disusun karena penulisanya sedang sibuk mengerjakan tugas yang tidak ada habisnya:)',
                'link' => 'https://bit.ly/3WVuwiL',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
