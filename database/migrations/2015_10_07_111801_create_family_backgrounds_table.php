<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->index();
            $table->text('members');
            $table->string('birth_order');
            $table->integer('number_of_brothers')->nullable();
            $table->integer('number_of_sisters')->nullable();
            $table->string('parent_status');
            $table->string('others');
            $table->string('type_of_living');
            $table->float('family_income');
            $table->timestamps();

             $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('family_backgrounds');
    }
}
