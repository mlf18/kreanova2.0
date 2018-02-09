<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('profils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kabupaten');
            $table->string('pekerjaan');
            $table->string('jk');
            $table->string('no_telp');
            $table->string('email');
            $table->string('anggota_1');
            $table->string('anggota_2');
            $table->string('anggota_3');
            $table->string('anggota_4');
            $table->string('anggota_5');
            $table->string('judul');
            $table->string('temuan');
            $table->string('pengembangan');
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
        Schema::drop('profils');
    }
}
