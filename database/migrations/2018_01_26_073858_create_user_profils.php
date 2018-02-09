<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfils extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profil', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('profil_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade');
            $table->primary(['user_id', 'profil_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_profil');
    }
}
