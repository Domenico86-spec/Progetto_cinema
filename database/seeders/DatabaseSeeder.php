<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $movies = [
            ['name' => 'Tron:Ares', 'image' => '/media/tron-ares.jpg', 'year' => '2025', 'genre' => 'Fantasy'],
            ['name' => 'Mission Impossible:The Final reckoning', 'image' => '/media/mission-impossible.jpg', 'year' => '2025', 'genre' => 'Action'],
            ['name' => 'Jurassic World: La rinascita', 'image' => '/media/jurassic-world.jpg', 'year' => '2025', 'genre' => 'Action'],
            ['name' => 'Avengers:Doomsday', 'image' => '/media/avengers.jpg', 'year' => '2025', 'genre' => 'Adventure'],
            ['name' => 'The F1', 'image' => '/media/f1.jpg', 'year' => '2025', 'genre' => 'Sport'],
            ['name' => 'Superman', 'image' => '/media/superman.jpg', 'year' => '2025', 'genre' => 'Adventure'],
            
        ];

        foreach ($movies as $movie) {
            Movie::create([
                'name' => $movie['name'],
                'image' => $movie['image'],
                'year' => $movie['year'],
                'genre' => $movie['genre'],
            ]);
        }
       
    }
}
