<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sportsdb1 extends Migration
{

    @return
     public function up()
     {
         Schema::create('sports_datas', function (Blueprint $table) {
             $table->increments('id')->unique();
             $table->string('team')->unique();
             $table->string('league');
             $table->string('record');
         });
     }

     @return
    public function down()
    {
        Schema::dropIfExists('sports_datas');
    }
}
