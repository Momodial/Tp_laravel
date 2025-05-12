<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Laravel pour les débutants',
            'author' => 'Jean Dupuis',
            'description' => 'Un guide simple pour commencer avec Laravel.',
            'published_at' => '2022-01-01',
        ]);

        Book::create([
            'title' => 'Le monde du PHP',
            'author' => 'Claire Martin',
            'description' => 'Une exploration complète du langage PHP.',
            'published_at' => '2023-05-15',
        ]);
    }
}
