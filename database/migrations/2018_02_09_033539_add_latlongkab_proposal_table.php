<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLatlongkabProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('proposals', function (Blueprint $table) {
            $table->double('latitude', 15, 8)->after('lampiran_name');
            $table->double('longitude', 15, 8)->after('latitude');
            $table->string('kabupaten')->after('manfaat')
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('proposals', function (Blueprint $table) {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
            $table->dropColumn('kabupaten');
        });
    }
}
