<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_id');
            $table->string('lname',50);
            $table->string('fname',50);
            $table->string('mname',50)->nullable();

            $table->integer('college_id')->unsigned()->index()->nullable();
            $table->integer('course_id')->unsigned()->index()->nullable();
            $table->string('year_level');
            $table->string('section')->nullable();
            $table->float('unp_cat_rating')->nullable();
            $table->integer('scholarship_id')->nullable()->unsigned()->index();

            $table->date('birthdate');
            $table->integer('age');
            $table->string('place_of_birth', 100);

            $table->string('citizenship', 50);

            $table->string('sex', 50);

            $table->string('civil_status', 20);
            $table->date('date_of_marriage')->nullable();

            $table->float('height', 10);
            $table->float('weight', 10);

            $table->string('bloodtype',10);

            $table->string('contact_number',15)->nullable();
            $table->string('email',50)->nullable();

            $table->string('religion', 50);

            $table->string('illness',50)->nullable();
            $table->string('disability',50)->nullable();

            $table->string('ethnic',20)->nullable();

            $table->string('home_address', 100);
            $table->text('present_addresses')->nullable();
            $table->text('dorms')->nullable();

            $table->enum('archived',['1','0'])->default('0');

            $table->timestamps();

            $table->foreign('college_id')
                ->references('id')
                ->on('colleges');
            $table->foreign('course_id')
                ->references('id')
                ->on('courses');
            $table->foreign('scholarship_id')
                ->references('id')
                ->on('scholarships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
