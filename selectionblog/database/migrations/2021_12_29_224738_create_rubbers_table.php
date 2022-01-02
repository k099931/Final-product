<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubbers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maker' , 20);
            $table->string('name' , 30);
            $table->string('image' , 100);
            $table->double('speed' , 4 , 2);
            $table->double('spin' , 4 , 2);
            $table->double('hardness' , 3 , 1);
            $table->integer('price');
            $table->integer('user_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubbers');
    }
}
