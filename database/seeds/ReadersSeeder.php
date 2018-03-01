<?php

use Illuminate\Database\Seeder;
use App\Reader;

class ReadersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reader::truncate();

        $faker = \Faker\Factory::create();

        $reg_number = Hash::make("triyono");
        for ($i = 0; $i < 10; $i++) {
            Reader::create([
                'reg_number' => $reg_number,
                'name' => $faker->name,
                'location' => $faker->address,
                'phone' => $faker->phoneNumber,
                'photo' => $faker->name
            ]);
        }
    }
}
