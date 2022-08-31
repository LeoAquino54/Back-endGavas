<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Nome_Instituicao");
            $table->unsignedBigInteger("Cod_Contato_FK");
            $table->foreign("Cod_Contato_FK")->references('id')->on('contato');
            $table->unsignedBigInteger("Cod_Endereco_FK");
            $table->foreign("Cod_Endereco_FK")->references('id')->on('enderecos');
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituicao');
    }
}
