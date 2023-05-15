<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('fName', 50);
            $table->string('mName', 50);
            $table->string('lName', 50);
            $table->string('addr', 200);
            $table->string('pBirth', 200);
            $table->date('bDate');
            $table->enum('sex', ['Male', 'Female', 'not']);
            $table->string('nation', 50);
            $table->string('email', 62);
            $table->string('cNum', 12);
            $table->string('lrn', 15);
            $table->enum('gradelvl', ['Grade 11', 'Grade 12']);
            $table->enum('strand', ['abm', 'home', 'ict']);
            $table->string('sYear', 20);
            $table->string('lSchool', 100);
            $table->string('lschoolAddr', 200);
            $table->string('lSyear', 20);
            $table->string('rCardurl', 100);
            $table->string('gMoralurl', 100);
            $table->string('bCerturl', 100);
            $table->string('parent_name', 200);
            $table->string('parent_addr', 200);
            $table->string('parent_cnum', 200);
            $table->string('imgurl', 100);
            $table->string('pass', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
