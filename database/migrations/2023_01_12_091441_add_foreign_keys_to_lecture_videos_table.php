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
        Schema::table('lecture_videos', function (Blueprint $table) {
            $table->foreign(['course_id'], 'lecture_videos_ibfk_1')->references(['course_id'])->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lecture_videos', function (Blueprint $table) {
            $table->dropForeign('lecture_videos_ibfk_1');
        });
    }
};
