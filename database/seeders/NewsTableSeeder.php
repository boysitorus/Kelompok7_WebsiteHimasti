<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'title' => 'Guntur Austin Sinaga - IISMA',
            'date' => '2023-06-15',
            'detail' => 'Guntur Augustin Sinaga lolos sebagai penerima beasiswa program IISMA, Mahasiswa Informatika angkatan 2020 ini berhasil menerima program IISMA di kampus western Canada. 
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took
             a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'picture' => 'img/news_pictures/guntur.PNG',
            'type' => 'ucapan'
        ]);

        News::create([
            'title' => 'Cicakcicakdidinding - Hackathon',
            'date' => '2022-06-15',
            'detail' => 'Team Cicakcicakdidinding yang beranggotakan Natanael Siregar, Roosen Manurung, dan Yoel Napitupulu, berhasil meraih posisi ke-2
            dalam ajang hackathon (Code For Nation). 
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'picture' => 'img/news_pictures/cicakdidinding.jpg',
            'type' => 'ucapan'
        ]);

        News::create([
            'title' => 'Temu Ramah Angkatan 19 dan 21',
            'date' => '2022-06-15',
            'detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'picture' => 'img/news_pictures/temu21.jpg',
            'type' => 'event'
        ]);

        News::create([
            'title' => 'Temu Ramah Angkatan 21 dan 22',
            'date' => '2022-06-15',
            'detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'picture' => 'img/news_pictures/temu22.jpg',
            'type' => 'event'
        ]);

        News::create([
            'title' => 'Temu Ramah Angkatan 21 dan 23',
            'date' => '2022-06-15',
            'detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'picture' => 'img/news_pictures/meet23.jpg',
            'type' => 'event'
        ]);
    }
}
