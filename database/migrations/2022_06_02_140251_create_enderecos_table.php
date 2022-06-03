<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            
            $table->string('cep', 8);
            $table->string('tipo_endereco', 80);
            $table->string('logradouro', 80);
            $table->string('numero', 10);
            $table->string('complemento', 80);
            $table->string('bairro', 80);
            $table->string('estado', 2);
            $table->string('cidade', 80);
            $table->unsignedBigInteger('membro_id'); 
            $table->unsignedBigInteger('user_id'); 
            $table->timestamps();

            $table->foreign('membro_id')->references('id')->on('membros');
            
            
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
};
