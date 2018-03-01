<?php

use Illuminate\Database\Seeder;
use App\Book;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\Book($faker));

        for ($i = 0; $i < 30; $i++) {
            Book::create([
                'reader_id' => $faker->numberBetween($min=1,$max=10),
                'title' => $faker->title,
                'review' => $faker->realText($maxNbChars = 500, $indexSize = 2),
                'author' => $faker->name,
                'publisher' => $faker->company,
                'get_from' => $faker->company,
                'rating' => $faker->numberBetween($min=1, $max=5),
                'cover' => $faker-> city
            ]);
        }
    }

}
