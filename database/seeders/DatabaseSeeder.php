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
            ['name' => 'Tron:Ares', 'image' => '/media/tron-ares.jpg'],
            ['name' => 'Mission Impossible:The Final reckoning', 'image' => '/media/mission impossible the final reckoning.jpg'],
            ['name' => 'Jurassic World: La rinascita', 'image' => '/media/jurassicworld.jpg'],
            ['name' => 'Avengers:Doomsday', 'image' => '/media/Avengersdoomsday.jpg'],
            ['name' => 'The F1', 'image' => '/media/F1-the movie.jpg'],
            ['name' => 'Superman', 'image' => '/media/Superman-2025.jpg'],
            
        ];

        foreach ($movies as $movie) {
            Movie::create([
                'name' => $movie['name'],
                'image' => $movie['image'],
                
            ]);
        }
       
    }
}
