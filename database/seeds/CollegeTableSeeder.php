<?php


use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CollegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();

        foreach (range(1, 10) as $index) {
        	DB::table('colleges')->insert([
        		'name' => $faker->word
        	]);

        }
    }
}
