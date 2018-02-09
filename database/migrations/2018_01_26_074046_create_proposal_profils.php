<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalProfils extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_profil', function (Blueprint $table) {
            $table->unsignedInteger('proposal_id');
            $table->unsignedInteger('profil_id');

            $table->foreign('proposal_id')->references('id')->on('proposals')->onDelete('cascade');
            $table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade');
            $table->primary(['proposal_id', 'profil_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proposal_profil');
    }
}
