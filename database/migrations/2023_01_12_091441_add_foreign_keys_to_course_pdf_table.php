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
        Schema::table('course_pdf', function (Blueprint $table) {
            $table->foreign(['course_id'], 'course_pdf_ibfk_1')->references(['course_id'])->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_pdf', function (Blueprint $table) {
            $table->dropForeign('course_pdf_ibfk_1');
        });
    }
};
