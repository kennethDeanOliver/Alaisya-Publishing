<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Dr. Sinta Rahma',
                'field' => 'Pendidikan & Pengembangan Pembelajaran',
                'bio' => 'Menulis tentang pendidikan, pembelajaran, dan cara membangun lingkungan belajar yang lebih baik.',
                'books' => 3,
                'initials' => 'SR',
                'image' => null,
            ],
            [
                'name' => 'Budi Santoso',
                'field' => 'Sejarah & Kebudayaan',
                'bio' => 'Mengangkat kisah, sejarah, dan kekayaan budaya Nusantara melalui tulisan yang mudah dipahami.',
                'books' => 2,
                'initials' => 'BS',
                'image' => null,
            ],
            [
                'name' => 'A. Pratama',
                'field' => 'Psikologi & Pengembangan Diri',
                'bio' => 'Mengeksplorasi hubungan manusia dengan dirinya sendiri, orang lain, dan makna kehidupan.',
                'books' => 2,
                'initials' => 'AP',
                'image' => null,
            ],
            [
                'name' => 'Rina Lestari',
                'field' => 'Ekonomi & Bisnis',
                'bio' => 'Menyajikan topik ekonomi dan keuangan dengan pendekatan yang dekat dengan kehidupan sehari-hari.',
                'books' => 2,
                'initials' => 'RL',
                'image' => null,
            ],
            [
                'name' => 'Dewi Anggraini',
                'field' => 'Kesehatan Mental & Gaya Hidup',
                'bio' => 'Menulis tentang keseimbangan hidup, kesehatan mental, dan kebiasaan yang mendukung kesejahteraan.',
                'books' => 1,
                'initials' => 'DA',
                'image' => null,
            ],
            [
                'name' => 'Andi Kurniawan',
                'field' => 'Pengembangan Diri & Produktivitas',
                'bio' => 'Membahas kesederhanaan, produktivitas, dan langkah-langkah kecil untuk hidup lebih terarah.',
                'books' => 1,
                'initials' => 'AK',
                'image' => null,
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}