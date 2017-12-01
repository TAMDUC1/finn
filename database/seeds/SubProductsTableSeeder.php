<?php

use Illuminate\Database\Seeder;
class SubProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filePath = storage_path('storage');

        for ($i=0; $i < 100; $i++){

        DB::table('products')->insert([
                'name' => str_random(10),
                'type' => str_random(10),
                'model' => str_random(10),
                'purchase_price' => random_int(20,200),
                'sale_price' => random_int(30,4000),
                'unit_in_stock' => random_int(40,99),
                'descriptions' => str_random(30),
                'photo' => $filePath,
                'lft' => 3,
                'rgt' =>4
            ]);


        DB::table('products')->insert([
            'name' => str_random(10),
            'type' => str_random(10),
            'model' => str_random(10),
            'purchase_price' => random_int(20,200),
            'sale_price' => random_int(30,4000),
            'unit_in_stock' => random_int(40,99),
            'descriptions' => str_random(30),
            'photo' => $filePath,
            'lft' => 5,
            'rgt' =>6
        ]);

        DB::table('products')->insert([
            'name' => str_random(10),
            'type' => str_random(10),
            'model' => str_random(10),
            'purchase_price' => random_int(20,200),
            'sale_price' => random_int(30,4000),
            'unit_in_stock' => random_int(40,99),
            'descriptions' => str_random(30),
            'photo' => $filePath,
            'lft' => 9,
            'rgt' =>10
        ]);

        DB::table('products')->insert([
            'name' => str_random(10),
            'type' => str_random(10),
            'model' => str_random(10),
            'purchase_price' => random_int(20,200),
            'sale_price' => random_int(30,4000),
            'unit_in_stock' => random_int(40,99),
            'descriptions' => str_random(30),
            'photo' => $filePath,
            'lft' => 11,
            'rgt' =>12
        ]);

        DB::table('products')->insert([
            'name' => str_random(10),
            'type' => str_random(10),
            'model' => str_random(10),
            'purchase_price' => random_int(20,200),
            'sale_price' => random_int(30,4000),
            'unit_in_stock' => random_int(40,99),
            'descriptions' => str_random(30),
            'photo' => $filePath,
            'lft' => 15,
            'rgt' =>16
        ]);

        DB::table('products')->insert([
            'name' => str_random(10),
            'type' => str_random(10),
            'model' => str_random(10),
            'purchase_price' => random_int(20,200),
            'sale_price' => random_int(30,4000),
            'unit_in_stock' => random_int(40,99),
            'descriptions' => str_random(30),
            'photo' => $filePath,
            'lft' => 17,
            'rgt' =>18
        ]);

        DB::table('products')->insert([
            'name' => str_random(10),
            'type' => str_random(10),
            'model' => str_random(10),
            'purchase_price' => random_int(20,200),
            'sale_price' => random_int(30,4000),
            'unit_in_stock' => random_int(40,99),
            'descriptions' => str_random(30),
            'photo' => $filePath,
            'lft' => 19,
            'rgt' =>20
        ]);
            }
    }
}
