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
            ['name' => 'Tron:Ares', 'image' => ''],
            ['name' => 'Mission Impossible:The Final reckoning', 'image' => ''],
            ['name' => 'Jurassic World: La rinascita', 'image' => ''],
            ['name' => 'Avengers:Doomsday', 'image' => ''],
            ['name' => 'The F1', 'image' => ''],
            ['name' => 'Superman', 'image' => ''],
            
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
