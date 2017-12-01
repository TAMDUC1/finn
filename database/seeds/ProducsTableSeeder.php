<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProducsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filePath = storage_path('storage');
        $faker = Faker::create();
        foreach (range(1,1000) as $index) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'type' => $faker->word,
                'model' => $faker->randomDigitNotNull,
                'purchase_price' => $faker->randomDigitNotNull,
                'sale_price' => $faker->randomDigitNotNull,
                'unit_in_stock' => $faker->randomDigitNotNull,
                'descriptions' => $faker->sentence,
                'photo' => $filePath
            ]);

        }
    }
}
