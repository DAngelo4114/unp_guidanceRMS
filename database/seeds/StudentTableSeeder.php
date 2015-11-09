<?php

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 1000) as $index) {
            DB::table('students')->insert([
                'school_id'                 =>        $faker->word,
                'lname'                     =>        $faker->lastName,
                'fname'                     =>        $faker->firstName($gender = null|'male'|'female'),
                'mname'                     =>        $faker->lastName ,
                'college_id'                =>        $faker->numberBetween($min = 1, $max = 10),
                'course_id'                 =>        $faker->numberBetween($min = 1, $max = 10),
                'year_level'                =>        $faker->randomElement($array = array('1st Year','2nd Year','3rd Year','4th Year')),
                'section'                   =>        $faker->word(),
                'unp_cat_rating'            =>        $faker->randomFloat($nbMaxDecimals = 1, $min = 50, $max = 100),
                'scholarship_id'            =>        $faker->numberBetween($min = 1, $max = 20),
                'birthdate'                 =>        $faker->date($format = 'Y-m-d', $max = 'now'),
                'age'                       =>        $faker->numberBetween($min = 15, $max = 30),
                'place_of_birth'            =>        $faker->address ,
                'citizenship'               =>        $faker->word,
                'sex'                       =>        $faker->randomElement($array = array('Male','Female','Gay','Bisexual','Lesbian','Transgender')),
                'civil_status'              =>        $faker->randomElement($array = array('Single','Married','Widow/Widower')),
                'date_of_marriage'          =>        $faker->date($format = 'Y-m-d', $max = 'now'),
                'height'                    =>        $faker->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 3),
                'weight'                    =>        $faker->randomFloat($nbMaxDecimals = 1, $min = 50, $max = 100),
                'bloodtype'                 =>        $faker->randomLetter,
                'contact_number'            =>        $faker->phoneNumber,
                'email'                     =>        $faker->email,
                'religion'                  =>        $faker->word,
                'illness'                   =>        $faker->word,
                'disability'                =>        $faker->word,
                'ethnic'                    =>        $faker->word,
                'home_address'              =>        $faker->word,
                'present_addresses'         =>        json_encode([
                		'year_level'=> $faker->randomElement($array = ['1st Year','2nd Year','3rd Year','4th Year']),
                		'address'=>$faker->address

                ]),
                'dorms'                     =>        json_encode([

                		'year_level'=> $faker->randomElement($array = ['1st Year','2nd Year','3rd Year','4th Year']),
                		'address'=>$faker->address
                ]),

            ]);
        }
    }
}
