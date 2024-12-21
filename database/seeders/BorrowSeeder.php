<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Reader;
use App\Models\Borrow;
use Faker\Factory as Faker;
class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        $bookIds = Book::pluck('id')->toArray();
        $readerIds = Reader::pluck('id')->toArray();

        for ($i = 0; $i < 100; $i++) {
            Borrow::create([
                'book_id' => $faker->randomElement($bookIds),
                'reader_id' => $faker->randomElement($readerIds),
                'borrow_date' => $faker->date(),
                'return_date' => $faker->dateTimeBetween('now', '+1 year'),
                'status' => $faker->randomElement(['borrowed', 'returned']),
            ]);
        }
    }
}
