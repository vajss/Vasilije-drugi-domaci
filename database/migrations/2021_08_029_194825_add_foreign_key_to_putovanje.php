<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPutovanje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('putovanje', function (Blueprint $table) {
            $table->unsignedBigInteger('dogadjaj_id');
            $table->foreign('dogadjaj_id')->references('id')->on('dogadjaj')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('putovanje', function (Blueprint $table) {
            $table->dropForeign('putovanje_dogadjaj_id_foreign');
        });
    }
}
