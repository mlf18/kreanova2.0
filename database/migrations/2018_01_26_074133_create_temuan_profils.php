<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemuanProfils extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temuan_profil', function (Blueprint $table) {
            $table->unsignedInteger('temuan_id');
            $table->unsignedInteger('profil_id');

            $table->foreign('temuan_id')->references('id')->on('temuans')->onDelete('cascade');
            $table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade');
            $table->primary(['temuan_id', 'profil_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('temuan_profil');
    }
}
