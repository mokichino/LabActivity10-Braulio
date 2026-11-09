<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name'     => 'Kagawad Alessandra Veronica Braulio',
            'position' => 'Kagawad',
            'email'    => 'kagawad.braulio@bulletin.test',
        ]);
        Author::factory()->count(4)->create();
    }
}
