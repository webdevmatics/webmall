<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Men',
                'slug' => 'men',
                'created_at' => '2020-03-07 15:10:58',
                'updated_at' => '2020-03-07 15:10:58',
            ),
            1 => 
            array (
                'id' => 4,
                'parent_id' => 3,
                'order' => 2,
                'name' => 'watch',
                'slug' => 'watch',
                'created_at' => '2020-03-07 15:11:36',
                'updated_at' => '2020-03-07 15:11:36',
            ),
            2 => 
            array (
                'id' => 5,
                'parent_id' => NULL,
                'order' => 4,
                'name' => 'Women',
                'slug' => 'women',
                'created_at' => '2020-03-14 10:02:06',
                'updated_at' => '2020-03-14 10:02:06',
            ),
            3 => 
            array (
                'id' => 6,
                'parent_id' => 5,
                'order' => 1,
                'name' => 'cosmetics',
                'slug' => 'cosmetics',
                'created_at' => '2020-03-14 10:02:28',
                'updated_at' => '2020-03-14 10:02:41',
            ),
            4 => 
            array (
                'id' => 7,
                'parent_id' => 6,
                'order' => 1,
                'name' => 'lipsticks',
                'slug' => 'lipsticks',
                'created_at' => '2020-03-14 10:03:54',
                'updated_at' => '2020-03-14 10:03:54',
            ),
            5 => 
            array (
                'id' => 8,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Electronics',
                'slug' => 'electronics',
                'created_at' => '2020-03-14 11:52:14',
                'updated_at' => '2020-03-14 11:52:14',
            ),
        ));
        
        
    }
}