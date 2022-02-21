<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('class');
            $table->date('joining_date');
            $table->integer('mobile_number');
            $table->integer('admission_number');
            $table->string('father_name');
            $table->string('farther_occupation');
            $table->integer('father_mobile_number');
            $table->string('mother_name');
            $table->string('mother_occupation');
            $table->integer('mother_mobile_number');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
