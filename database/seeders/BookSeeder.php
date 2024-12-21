<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        for($i=0; $i<100; $i++)
        {
            Book::create([
                'name' => $faker->sentence(3),
                'author' => $faker->name(),
                'category' => $faker->randomElement(['Fiction', 'Science', 'History', 'Novel']),
                'year' => $faker->year(),
                'quantity' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
