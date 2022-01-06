<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRucketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruckets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('maker', 20);
            $table->string('name', 30);
            $table->string('image', 100);
            $table->string('repulsion', 30);
            $table->string('feeling', 20);
            $table->double('weight', 3 , 1);
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruckets');
    }
}
