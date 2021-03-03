<?php

use Illuminate\Database\Seeder;
use App\product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$value = "1234567890";
        product::create([

        	'product_name' => 'Full slaeev Shirt',
        	'product_code' => rand($value,5),
        	'quantity' => '5',
        	'price' => '1000',

        ]);

        product::create([

        	'product_name' => 'Full Red Shirt',
        	'product_code' => rand($value,5),
        	'quantity' => '5',
        	'price' => '1000',

        ]);

        product::create([

        	'product_name' => 'Full Green Shirt',
        	'product_code' => rand($value,5),
        	'quantity' => '6',
        	'price' => '1000',

        ]);

        product::create([

        	'product_name' => 'Full White Shirt',
        	'product_code' => rand($value,5),
        	'quantity' => '7',
        	'price' => '1000',

        ]);
    }
}
