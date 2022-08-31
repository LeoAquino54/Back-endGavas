<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("description");// criar area na table
            $table->string("marca");
            $table->integer("quantidade")->default(1);
            $table->float("valor")->default(0);
            $table->timestamps();
            $table->softDeletes();  //criar delete act nao vai apagra do banco de dados, somente do usuario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
