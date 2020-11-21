<?php

namespace Database\Seeders;

use App\Shop;
use App\Product;
use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //seller
        $shop1 = factory(Shop::class)->create(['user_id' => 4]);
        $shop2 = factory(Shop::class)->create(['user_id' => 5]);

        factory(Product::class, 10)->create(['shop_id'=> $shop1->id]);
        factory(Product::class, 30)->create(['shop_id'=> $shop2->id]);
        factory(Product::class, 30)->create(['shop_id'=> $shop1->id]);

    }
}
