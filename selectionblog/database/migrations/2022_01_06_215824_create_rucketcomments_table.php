<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRucketcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rucketcomments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comment', 200);
            $table->integer('rucket_id')->unsigned()->nullable();
            $table->foreign('rucket_id')->references('id')->on('ruckets')->OnDeletes('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rucketcomments');
    }
}
