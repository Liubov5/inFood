<?php

use Illuminate\Database\Seeder;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('deliveries')->insert([
        	'delivery'=>"Бесплатная доставка",
        ]);

        DB::table('deliveries')->insert([
        	'delivery'=>"Платная доставка",
        ]);
        DB::table('deliveries')->insert([
        	'delivery'=>"Платная доставка",
        ]);
    }
}
