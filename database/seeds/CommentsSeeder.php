<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 150; $i++) {
            Comment::create([
                'reader_id' => $faker->numberBetween($min=1,$max=10),
                'book_id' => $faker->numberBetween($min=1,$max=30),
                'comment' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'review_rating' => $faker->numberBetween($min=1, $max=5)
            ]);
        }
    }
}
