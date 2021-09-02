<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename("students", "student");
        Schema::rename("dogadjajs", "dogadjaj");
        Schema::rename("putovanjes", "putovanje");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename("student", "students");
        Schema::rename("dogadjaj", "dogadjajs");
        Schema::rename("putovanje", "putovanjes");
    }
}
