<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
        	'region'=>"Якутск"
        ]);

        DB::table('regions')->insert([
        	'region'=>"Жатай"
        ]);
        DB::table('regions')->insert([
        	'region'=>"Хангаласский улус"
        ]);
        DB::table('regions')->insert([
        	'region'=>"Верхневилюйский улус"
        ]);
    }
}
