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
        if (!Schema::hasTable('registro_estacionamento'))
            Schema::create('registro_estacionamento', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('id_carro')->unsigned();
                $table->timestamp('dt_entrada');
                $table->timestamp('dt_saida')->nullable();
                $table->integer('vl_hora')->unsigned();
                $table->integer('st_registro')->unsigned();
                $table->double('vl_total', 5, 2)->nullable();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('registro_estacionamento');
    }
};
