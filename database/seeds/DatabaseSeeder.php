<?php


use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Model::unguard();

        $this->call(CollegeTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(ScholarshipTableSeeder::class);
        $this->call(StudentTableSeeder::class);

        Model::reguard();
    }
}
