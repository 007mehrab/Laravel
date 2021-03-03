<?php

use Illuminate\Database\Seeder;
use App\product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();
    	product::truncate();

    	foreach (range(1,50) as $index)
    	{
    		product::create([

    		'product_name' => $faker->name,
    		'product_code' => $faker->randomNumber(5),
    		'quantity' => $faker->numberBetween(10, 100),
    		'price' => $faker->numberBetween(10, 50),
    		]);
    	}
    }
}
