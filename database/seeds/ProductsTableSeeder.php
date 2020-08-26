<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 33)->create()
        ->each(function($product){
            $categories = [3, 5, 8];
            $product->categories()->attach($categories[array_rand($categories)]);
        });
    }
}
