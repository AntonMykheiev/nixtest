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
            'product_id' => '1',
            'quantity' => '3',
        ]);

        DB::table('orders')->insert([
            'category_name' => 'Shoes',
            'product_id' => '2',
            'quantity' => '2',
        ]);

        DB::table('orders')->insert([
            'category_name' => 'Cars',
            'product_id' => '3',
            'quantity' => '1',
        ]);
    }
}
