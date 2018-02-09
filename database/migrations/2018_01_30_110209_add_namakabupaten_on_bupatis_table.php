<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNamakabupatenOnBupatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bupatis', function (Blueprint $table) {
            $table->string('nama_kabupaten')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bupatis', function (Blueprint $table){
            $table->string('nama_kabupaten')->change();
        });
    }
}
