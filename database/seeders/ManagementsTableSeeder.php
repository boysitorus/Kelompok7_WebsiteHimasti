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
            'year' => 2022,
            'divisi' => 'Badan Pengurus Harian'
        ]);

        Management::create([
            'year' => 2022,
            'divisi' => 'Riset dan Teknologi'
        ]);

        Management::create([
            'year' => 2022,
            'divisi' => 'Minat dan Bakat'
        ]);

        Management::create([
            'year' => 2022,
            'divisi' => 'Dana dan Usaha'
        ]);

        Management::create([
            'year' => 2022,
            'divisi' => 'Hubungan Masyarakat'
        ]);

        Management::create([
            'year' => 2022,
            'divisi' => 'Komunikasi dan Informasi'
        ]);

        Management::create([
            'year' => 2022,
            'divisi' => 'Pendidikan'
        ]);

        Management::create([
            'year' => 2023,
            'divisi' => 'Badan Pengurus Harian'
        ]);

        Management::create([
            'year' => 2023,
            'divisi' => 'Riset dan Teknologi'
        ]);

        Management::create([
            'year' => 2023,
            'divisi' => 'Minat dan Bakat'
        ]);

        Management::create([
            'year' => 2023,
            'divisi' => 'Dana dan Usaha'
        ]);

        Management::create([
            'year' => 2023,
            'divisi' => 'Hubungan Masyarakat'
        ]);

        Management::create([
            'year' => 2023,
            'divisi' => 'Komunikasi dan Informasi'
        ]);

        Management::create([
            'year' => 2023,
            'divisi' => 'Pendidikan'
        ]);

    }
}
