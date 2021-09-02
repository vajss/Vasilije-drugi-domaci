<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePutovanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('putovanjes', function (Blueprint $table) {
            $table->id();
            $table->integer('cena');
            $table->string("hotel", 30);
            $table->string("domacinLG", 30);
            $table->dateTime('datum_pocetka')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('putovanjes');
    }
}
