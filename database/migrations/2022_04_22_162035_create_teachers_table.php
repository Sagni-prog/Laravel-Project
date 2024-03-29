<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('username');
            $table->string('phone_no');
            $table->string('profession');
            $table->string('catagory');
            $table->unsignedInteger('facebook');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('twitter');
            $table->unsignedInteger('linkidin');
            $table->unsignedInteger('instagram');
            $table->unsignedInteger('github');
            $table->string('flink');
            $table->string('tlink');
            $table->string('llink');
            $table->string('ilink');
            $table->string('glink');
            $table->string('password');
            $table->unsignedInteger('role');
            $table->unsignedInteger('isApproved');
            $table->string('profile');
            $table->string('biblography');
            $table->unsignedInteger('reset_password');
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
        Schema::dropIfExists('teachers');
    }
};
