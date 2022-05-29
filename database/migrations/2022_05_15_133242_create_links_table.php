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
        Schema::create('links', function (Blueprint $table) {
            $table->increments('link_id');
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
        Schema::dropIfExists('links');
    }
};
