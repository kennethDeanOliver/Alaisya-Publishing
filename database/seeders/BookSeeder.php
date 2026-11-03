<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => "Caca dan Oyen: Petualangan di Negeri Pelangi", 
            'author' => "Mysha Chaira Aisyah Azzahra", 
            'category' => "Fantasy",
            'price' => "Rp 85.000",
            'cover' => "images/books/caca-dan-oyen_front.jpg"
        ]);

        Book::create([
            'title' => "Seni Melepaskan Emosi", 
            'author' => "Huda Samudera, Yurika Fauzia Wardhani", 
            'category' => "Self-Improvement",
            'price' => "Rp 85.000",
            'cover' => "images/books/seni-melepaskan-emosi_front.jpg"
        ]);

        Book::create([
            'title' => "Yang Kamu Rasakan Hari Ini, Mungkin Bukan Tentang Hari Ini", 
            'author' => "Yurika Fauzia Wardhani", 
            'category' => "Self-Improvement",
            'price' => "Rp 85.000",
            'cover' => "images/books/yang-kamu-rasakan-hari-ini_front.jpg"
        ]);

        Book::create([
            'title' => "AI untuk Penelitian Ilmiah", 
            'author' => "Yurika Fauzia Wardhani",
            'category' => "Science",
            'price' => "Rp 85.000",
            'cover' => "images/books/ai-untuk-penelitian-ilmiah_front.jpg"
        ]);
    }
}
