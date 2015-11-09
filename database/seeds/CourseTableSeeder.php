<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
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
        	DB::table('courses')->insert([
        		'college_id'=> $faker->numberBetween($min = 1, $max = 10),
        		'name' => $faker->word
        	]);

        }
    }
}
