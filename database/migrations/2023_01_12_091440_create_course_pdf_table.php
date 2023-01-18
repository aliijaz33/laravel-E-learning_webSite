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
        Schema::create('course_pdf', function (Blueprint $table) {
            $table->comment('');
            $table->integer('pdf_id', true);
            $table->integer('course_id')->index('course_id');
            $table->string('pdf_name', 100)->nullable();
            $table->integer('pdf_pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_pdf');
    }
};
