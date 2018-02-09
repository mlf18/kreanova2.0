<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('abstrak');
            $table->string('latar_belakang');
            $table->string('maksud');
            $table->string('manfaat');
            $table->string('spek_teknik');
            $table->string('keunggulan');
            $table->string('penerapan');
            $table->string('biaya_produksi');
            $table->string('prospek_bisnis');
            $table->string('proposal_name');
            $table->string('spk_name');
            $table->string('lampiran_name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proposals');
    }
}
