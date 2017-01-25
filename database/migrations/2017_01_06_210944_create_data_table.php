<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->string('gender');
            $table->string('education');
            $table->string('ethnicity');
            $table->string('employment');
            $table->string('lang');
            $table->double('rand')->nullable();
            $table->string('bottlepicked')->nullable();
            $table->string('bottle1percentage')->nullable();
            $table->string('bottle2percentage')->nullable();
            $table->string('bottle3percentage')->nullable();
            $table->string('bottle4percentage')->nullable();
            $table->string('bottle5percentage')->nullable();
            $table->string('bottle6percentage')->nullable();
            $table->string('bottle7percentage')->nullable();
            $table->string('correct')->nullable();
            $table->string('incorrect')->nullable();
            $table->string('control')->nullable();
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
         Schema::dropIfExists('data');
    }
}
