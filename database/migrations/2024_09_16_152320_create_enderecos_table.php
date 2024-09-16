<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('endereco'))
            Schema::create('endereco', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('id_cliente')->unsigned();
                $table->string('endereco');
                $table->string('complemento')->nullable();
                $table->string('numero');
                $table->string('cidade');
                $table->string('bairro')->nullable();
                $table->string('uf');
                $table->string('cep');
                $table->timestamp('created_at');
                $table->timestamp('updated_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('endereco');
        Schema::table('endereco', function (Blueprint $table) {
            $table->foreign('id_cliente')->references('id')->on('cliente');
        });
    }
};
