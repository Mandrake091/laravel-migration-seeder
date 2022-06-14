<?php

use Illuminate\Database\Seeder;

use \Faker\Generator as Faker;
use App\Hotel;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newHotel = new Hotel();

            $newHotel->title = $faker->company();
            $newHotel->address = $faker->streetAddress();
            $newHotel->description = $faker->paragraph(5, true);
            $newHotel->city = $faker->city();
            $newHotel->price = $faker->randomFloat(2, 20000, 5000000);
            $newHotel->square_meters = $faker->numberBetween(0, 1000);
            $newHotel->image_url = $faker->imageUrl(360, 360, 'house', true);

            $newHotel->save();
        }
    }
}