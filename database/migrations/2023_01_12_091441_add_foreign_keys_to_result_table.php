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
        Schema::table('result', function (Blueprint $table) {
            $table->foreign(['quiz_id'], 'result_ibfk_2')->references(['quiz_id'])->on('quize');
            $table->foreign(['user_id'], 'result_ibfk_1')->references(['id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('result', function (Blueprint $table) {
            $table->dropForeign('result_ibfk_2');
            $table->dropForeign('result_ibfk_1');
        });
    }
};
