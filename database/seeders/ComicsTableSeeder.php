<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $comics = include 'comics.php'; // Assicurati che il file `comics.php` sia nella stessa directory

        foreach ($comics as $comic) {
            Comic::create([
                'title' => $comic['title'],
                'description' => $comic['description'],
                'thumb' => $comic['thumb'],
                'price' => $comic['price'],
                'series' => $comic['series'],
                'sale_date' => $comic['sale_date'],
                'type' => $comic['type'],
            ]);
        }
    }
}
