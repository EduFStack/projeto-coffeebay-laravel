<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('produtos',function(Blueprint $table){
            $table->id();
            $table->string('nome',30);
            $table->string('resumo',30);
            $table->text('descricao',2000);
            $table->string('imagem',80);
            $table->smallInteger('intensidade');
            $table->enum('status',['Ativo','Inativo']);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('produtos');
    }
}
