<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_name' => 'Phones',
            'name' => 'Iphone',
            'price' => '20000',
        ]);

        DB::table('products')->insert([
            'category_name' => 'Phones',
            'name' => 'Samsung',
            'price' => '7',
        ]);

        DB::table('products')->insert([
            'category_name' => 'Phones',
            'name' => 'Xiaomi',
            'price' => '1488',
        ]);

        DB::table('products')->insert([
            'category_name' => 'Shoes',
            'name' => 'New Balance',
            'price' => '1400',
        ]);

        DB::table('products')->insert([
            'category_name' => 'Shoes',
            'name' => 'Asics',
            'price' => '8800',
        ]);

        DB::table('products')->insert([
            'category_name' => 'Shoes',
            'name' => 'Nike',
            'price' => '7',
        ]);

        DB::table('products')->insert([
            'category_name' => 'Cars',
            'name' => 'BMW',
            'price' => '8800000',
        ]);

        DB::table('products')->insert([
            'category_name' => 'Cars',
            'name' => 'MERCEDES',
            'price' => '8700000',
        ]);

        DB::table('products')->insert([
            'category_name' => 'Cars',
            'name' => 'AUDI',
            'price' => '8600000',
        ]);
    }
}
