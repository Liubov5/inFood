<?php

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
        //
        DB::table('products')->insert([
        	'product'=>"карась",
        	'category_id' => 2
        ]);

        DB::table('products')->insert([
        	'product'=>"чир",
        	'category_id' => 2
        ]);
    }
}
