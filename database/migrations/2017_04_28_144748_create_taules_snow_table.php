<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaulesSnowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('taules_snow', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('mides');
          $table->string('marca');
          $table->integer('preu');
          $table->string('imatge');
          $table->timestamp('created_at')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taules_snow');
    }
}
