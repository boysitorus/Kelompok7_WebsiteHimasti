<?php

namespace Database\Seeders;

use App\Models\Management;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Management::create([
            'year' => 2021,
            'divisi' => 'Badan Pengurus Harian'
        ]);

        Management::create([
            'year' => 2021,
            'divisi' => 'Riset dan Teknologi'
        ]);

        Management::create([
            'year' => 2021,
            'divisi' => ''
        ]);

        Management::create([
            'year' => 2021,
            'divisi' => 'Badan Pengurus Harian'
        ]);

        Management::create([
            'year' => 2021,
            'divisi' => 'Badan Pengurus Harian'
        ]);

        Management::create([
            'year' => 2021,
            'divisi' => 'Badan Pengurus Harian'
        ]);

        Management::create([
            'year' => 2021,
            'divisi' => 'Badan Pengurus Harian'
        ]);

        Management::create([
            'year' => 2021,
            'divisi' => 'Badan Pengurus Harian'
        ]);

        Management::create([
            'year' => 2021,
            'divisi' => 'Badan Pengurus Harian'
        ]);
    }
}
