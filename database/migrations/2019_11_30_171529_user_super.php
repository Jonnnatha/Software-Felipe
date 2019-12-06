<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserSuper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome', 30);
          $table->string('senha');
          $table->char('telefone')->nullalbe();
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
    Schema::drop('usuarios');
    }
}
