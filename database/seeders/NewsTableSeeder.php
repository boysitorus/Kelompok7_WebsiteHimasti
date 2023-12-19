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
            'title' => 'Guntur Austin Sinaga',
            'date' => '2003-09-15',
            'detail' => 'lorem ipsum',
            'picture' =>'img/news_pictures/gambar1.PNG',
            'type' => 'ucapan'
        ]);
    }
}
