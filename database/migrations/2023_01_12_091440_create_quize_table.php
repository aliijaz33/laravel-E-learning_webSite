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
        Schema::create('quize', function (Blueprint $table) {
            $table->comment('');
            $table->integer('quiz_id', true);
            $table->integer('course_id')->index('course_id');
            $table->integer('questions')->nullable();
            $table->string('answer 1', 100)->nullable();
            $table->string('answer 2', 100)->nullable();
            $table->string('answer 3', 100)->nullable();
            $table->string('correct_answer', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quize');
    }
};
