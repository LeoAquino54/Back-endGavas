<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Rua_Endereco");
            $table->string("Bairro_Endereco");
            $table->string("Numero_Endereco");
            $table->unsignedBigInteger("Cod_Cidade_FK");
            $table->foreign("Cod_Cidade_FK")->references('id')->on('cidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
