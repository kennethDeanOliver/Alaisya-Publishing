<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'slug' => 'membangun-kebiasaan-membaca',
                'title' => 'Membangun Kebiasaan Membaca di Tengah Kesibukan',
                'category' => 'Literasi',
                'author' => 'Tim Editorial Alaisya Publishing',
                'date' => '12 November 2025',
                'excerpt' => 'Membaca tidak selalu harus dimulai dengan berjam-jam waktu luang. Kebiasaan kecil yang konsisten dapat menjadi awal dari perjalanan literasi.',
                'image' => null,
                'read_time' => '5 menit baca',
                'featured' => true,
            ],
            [
                'slug' => 'mengapa-menulis-penting',
                'title' => 'Mengapa Menulis Tetap Penting di Era Digital?',
                'category' => 'Menulis',
                'author' => 'Tim Editorial Alaisya Publishing',
                'date' => '5 November 2025',
                'excerpt' => 'Menulis membantu kita menyusun pikiran, menyimpan pengalaman, dan menyampaikan gagasan kepada orang lain.',
                'image' => null,
                'read_time' => '4 menit baca',
                'featured' => false,
            ],
            [
                'slug' => 'proses-penerbitan-buku',
                'title' => 'Mengenal Tahapan Proses Penerbitan Buku',
                'category' => 'Penerbitan',
                'author' => 'Tim Editorial Alaisya Publishing',
                'date' => '28 Oktober 2025',
                'excerpt' => 'Dari naskah awal hingga buku siap dibaca, ada beberapa tahap penting yang menjaga kualitas sebuah terbitan.',
                'image' => null,
                'read_time' => '6 menit baca',
                'featured' => false,
            ],
            [
                'slug' => 'memilih-buku-untuk-dibaca',
                'title' => 'Cara Memilih Buku yang Sesuai dengan Minat Anda',
                'category' => 'Rekomendasi',
                'author' => 'Tim Editorial Alaisya Publishing',
                'date' => '20 Oktober 2025',
                'excerpt' => 'Kenali minat, tujuan membaca, dan jenis bacaan yang dapat menemani proses belajar maupun waktu senggang.',
                'image' => null,
                'read_time' => '3 menit baca',
                'featured' => false,
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}