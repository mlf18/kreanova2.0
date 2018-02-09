<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengusulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('pengusuls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('lembaga');
            $table->text('alamat');
            $table->text('no_telp');
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
        Schema::drop('pengusuls');
    }
}
