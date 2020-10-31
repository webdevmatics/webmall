<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-11 00:10:11',
                'updated_at' => '2020-02-11 00:10:11',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-02-11 00:10:14',
                'updated_at' => '2020-02-11 00:10:14',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2020-02-11 00:22:34',
                'updated_at' => '2020-02-11 00:22:34',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2020-02-11 00:22:34',
                'updated_at' => '2020-02-11 00:22:34',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2020-02-11 00:22:34',
                'updated_at' => '2020-02-11 00:22:34',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2020-02-11 00:22:34',
                'updated_at' => '2020-02-11 00:22:34',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2020-02-11 00:22:34',
                'updated_at' => '2020-02-11 00:22:34',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'created_at' => '2020-02-19 17:15:37',
                'updated_at' => '2020-02-19 17:15:37',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'created_at' => '2020-02-19 17:15:37',
                'updated_at' => '2020-02-19 17:15:37',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'created_at' => '2020-02-19 17:15:37',
                'updated_at' => '2020-02-19 17:15:37',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'created_at' => '2020-02-19 17:15:37',
                'updated_at' => '2020-02-19 17:15:37',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'created_at' => '2020-02-19 17:15:37',
                'updated_at' => '2020-02-19 17:15:37',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2020-02-19 17:18:39',
                'updated_at' => '2020-02-19 17:18:39',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2020-02-19 17:18:39',
                'updated_at' => '2020-02-19 17:18:39',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2020-02-19 17:18:39',
                'updated_at' => '2020-02-19 17:18:39',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2020-02-19 17:18:39',
                'updated_at' => '2020-02-19 17:18:39',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2020-02-19 17:18:39',
                'updated_at' => '2020-02-19 17:18:39',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_coupons',
                'table_name' => 'coupons',
                'created_at' => '2020-04-04 09:11:42',
                'updated_at' => '2020-04-04 09:11:42',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_coupons',
                'table_name' => 'coupons',
                'created_at' => '2020-04-04 09:11:42',
                'updated_at' => '2020-04-04 09:11:42',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_coupons',
                'table_name' => 'coupons',
                'created_at' => '2020-04-04 09:11:42',
                'updated_at' => '2020-04-04 09:11:42',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_coupons',
                'table_name' => 'coupons',
                'created_at' => '2020-04-04 09:11:42',
                'updated_at' => '2020-04-04 09:11:42',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_coupons',
                'table_name' => 'coupons',
                'created_at' => '2020-04-04 09:11:42',
                'updated_at' => '2020-04-04 09:11:42',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'browse_transactions',
                'table_name' => 'transactions',
                'created_at' => '2020-08-15 18:02:27',
                'updated_at' => '2020-08-15 18:02:27',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'read_transactions',
                'table_name' => 'transactions',
                'created_at' => '2020-08-15 18:02:27',
                'updated_at' => '2020-08-15 18:02:27',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'edit_transactions',
                'table_name' => 'transactions',
                'created_at' => '2020-08-15 18:02:27',
                'updated_at' => '2020-08-15 18:02:27',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'add_transactions',
                'table_name' => 'transactions',
                'created_at' => '2020-08-15 18:02:27',
                'updated_at' => '2020-08-15 18:02:27',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'delete_transactions',
                'table_name' => 'transactions',
                'created_at' => '2020-08-15 18:02:27',
                'updated_at' => '2020-08-15 18:02:27',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'browse_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2020-08-15 18:03:17',
                'updated_at' => '2020-08-15 18:03:17',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'read_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2020-08-15 18:03:17',
                'updated_at' => '2020-08-15 18:03:17',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'edit_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2020-08-15 18:03:17',
                'updated_at' => '2020-08-15 18:03:17',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'add_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2020-08-15 18:03:17',
                'updated_at' => '2020-08-15 18:03:17',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'delete_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2020-08-15 18:03:17',
                'updated_at' => '2020-08-15 18:03:17',
            ),
        ));
        
        
    }
}