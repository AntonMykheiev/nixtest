<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'category_name' => 'Phones',
            'product_name' => 'Iphone',
            'quantity' => '3',
        ]);

        DB::table('orders')->insert([
            'category_name' => 'Shoes',
            'product_name' => 'Nike',
            'quantity' => '2',
        ]);

        DB::table('orders')->insert([
            'category_name' => 'Cars',
            'product_name' => 'BMW',
            'quantity' => '1',
        ]);
    }
}
