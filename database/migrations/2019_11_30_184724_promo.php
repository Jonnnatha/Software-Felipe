<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Promo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('oferta', function (Blueprint $table) {
          $table->increments('id');

          $table->string('nome', 30);
          $table->char('valor_inicial',30);
          $table->char('valor_promocao',30);
          $table->char('valor_final',30);
         $table->string('analogia', 30);
          $table->string('img', 300);
          $table->text('notes')->nullalbe();
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
Schema::drop('oferta');
    }
}
