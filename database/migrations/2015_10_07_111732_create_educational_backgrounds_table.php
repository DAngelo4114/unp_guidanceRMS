<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->index();
            $table->string('level');
            $table->string('school_name_address');
            $table->string('degree')->nullable();
            $table->string('year_graduated')->nullable();
            $table->string('date_from');
            $table->string('date_to');
            $table->float('general_average');
            $table->string('awards')->nullable();

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
        Schema::drop('educational_backgrounds');
    }
}
