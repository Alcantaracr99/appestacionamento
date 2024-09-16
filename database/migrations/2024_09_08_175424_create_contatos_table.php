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
        if (!Schema::hasTable('contato'))
            Schema::create('contato', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('id_cliente')->unsigned();
                $table->string('telefone');
                $table->integer('tp_telefone')->unsigned();
                $table->string('email');
                $table->timestamp('created_at');
                $table->timestamp('updated_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('contato');
    }
};
