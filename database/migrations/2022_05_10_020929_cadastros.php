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
        //
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 40);
            $table->string('sobrenome', 40);
            $table->string('cpf', 14)->nullable()->unique();
            $table->string('email', 40)->nullable();
            $table->string('email_secundario', 40)->nullable();
            $table->string('telefone_secundario', 15)->nullable();
            $table->string('telefone', 15);
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
        Schema::dropIfExists('cadastros');
    }
};
