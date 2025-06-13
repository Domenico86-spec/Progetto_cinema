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
            ['name' => 'Tron - Ares', 'image' => '/images/tron-ares.jpg', 'genre' => 'Azione', 'cast' => 'Jared Leto', 'year' => 2025],
            ['name' => 'Mission Impossible - The Final reckoning', 'image' => '/images/mission impossible the final reckoning.jpg', 'genre' => 'Azione', 'cast' => 'Tom Cruise', 'year' => 2025],
            ['name' => 'Jurassic World - La rinascita', 'image' => '/images/jurassicworld.jpg', 'genre' => 'Azione', 'cast' => 'Chris Pratt', 'year' => 2025],
            ['name' => 'Avengers - Doomsday', 'image' => '/images/Avengersdoomsday.jpg', 'genre' => 'Azione', 'cast' => 'Robert Downey Jr', 'year' => 2025],
            ['name' => 'The F1', 'image' => '/images/F1-the movie.jpg', 'genre' => 'Azione', 'cast' => 'Lewis Hamilton', 'year' => 2025],
            ['name' => 'Superman', 'image' => '/images/Superman-2025.jpg', 'genre' => 'Azione', 'cast' => 'Henry Cavill', 'year' => 2025],
            
        ];

        foreach ($movies as $movie) {
            Movie::create([
                'name' => $movie['name'],
                'image' => $movie['image'],
                'genre' => $movie['genre'],
                'cast' => $movie['cast'],
                'year' => $movie['year'],
                
            ]);
        }
       
    }
}
