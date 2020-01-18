<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaFirstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ma_firsts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day');
            $table->string('time');
            $table->string('semester');
            $table->string('subject');
            $table->string('lecturer');
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
        Schema::dropIfExists('ma_firsts');
    }
}
