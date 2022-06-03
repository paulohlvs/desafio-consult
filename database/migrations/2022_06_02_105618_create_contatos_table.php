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
        Schema::create('contatos', function (Blueprint $table) {
                       
            $table->id();
            
            $table->string('tipo', 20);
            $table->string('ddd', 3);
            $table->string('telefone', 8);
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
        Schema::dropIfExists('contatos');
    }
};
