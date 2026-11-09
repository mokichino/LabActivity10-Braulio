<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::all();
        Post::factory()->count(40)
            ->sequence(fn ($seq) => ['author_id' => $authors->random()->id])
            ->create();
        Post::factory()->count(10)->draft()
            ->sequence(fn ($seq) => ['author_id' => $authors->random()->id])
            ->create();
// Your pinned post: write this one with Post::create([...])
// (author = your Kagawad, is_pinned = true, published_at = your 2026 birthday)
        $kagawad = Author::where('email', 'kagawad.braulio@bulletin.test')->first();
        Post::create([
            'author_id'    => $kagawad->id,
            'title'        => 'Purok Braulio Clean-up Drive',
            'category'     => 'Announcement',
            'body'         => 'Join us for the clean-up drive...',
            'is_published' => true,
            'is_pinned'    => true,
            'published_at' => '2026-06-24 08:00:00', //my bday
        ]);
    }
}
