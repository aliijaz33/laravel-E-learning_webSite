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
        Schema::table('quize', function (Blueprint $table) {
            $table->foreign(['course_id'], 'quize_ibfk_1')->references(['course_id'])->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quize', function (Blueprint $table) {
            $table->dropForeign('quize_ibfk_1');
        });
    }
};
