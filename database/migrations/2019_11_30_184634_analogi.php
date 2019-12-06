<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Analogi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('analogia', function (Blueprint $table) {
               $table->increments('id');
               $table->string('nome', 30);
               $table->string('abreviatura', 30);
               $table->timestamps();
               $table->softDeletes();
               $table->rememberToken();
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('analogia');
    }
}
