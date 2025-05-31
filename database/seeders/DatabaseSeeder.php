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
            ['name' => 'Tron:Ares', 'image' => '/images/tron-ares.jpg'],
            ['name' => 'Mission Impossible:The Final reckoning', 'image' => '/images/mission impossible the final reckoning.jpg'],
            ['name' => 'Jurassic World: La rinascita', 'image' => '/images/jurassicworld.jpg'],
            ['name' => 'Avengers:Doomsday', 'image' => '/images/Avengersdoomsday.jpg'],
            ['name' => 'The F1', 'image' => '/images/F1-the movie.jpg'],
            ['name' => 'Superman', 'image' => '/images/Superman-2025.jpg'],
            
        ];

        foreach ($movies as $movie) {
            Movie::create([
                'name' => $movie['name'],
                'image' => $movie['image'],
                
            ]);
        }
       
    }
}
