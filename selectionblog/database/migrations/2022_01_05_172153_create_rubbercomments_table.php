<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubbercommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubbercomments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comment', 200);
            $table->integer('rubber_id')->unsigned()->nullable();
            $table->foreign('rubber_id')->references('id')->on('rubbers')->OnDeletes('cascade');
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
        Schema::dropIfExists('rubbercomments');
    }
}
