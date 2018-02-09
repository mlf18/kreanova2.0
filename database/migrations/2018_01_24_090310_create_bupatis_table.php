<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBupatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('bupatis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kabupaten');
            $table->text('alokasi_anggaran');
            $table->text('perda');
            $table->text('mou');
            $table->text('lomba_kab');
            $table->text('pameran_kab');
            $table->text('jumlah_lombakab');
            $table->text('jumlah_pamerankab');
            $table->text('pemenang_provinsi');
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
        Schema::dropIfExists('bupatis');
    }
}

