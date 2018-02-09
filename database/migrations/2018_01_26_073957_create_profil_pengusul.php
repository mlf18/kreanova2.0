<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilPengusul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_pengusul', function (Blueprint $table) {
            $table->unsignedInteger('profil_id');
            $table->unsignedInteger('pengusul_id');

            $table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade');
            $table->foreign('pengusul_id')->references('id')->on('pengusuls')->onDelete('cascade');
            $table->primary(['profil_id', 'pengusul_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profil_pengusul');
    }
}
