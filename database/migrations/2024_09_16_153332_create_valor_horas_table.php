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
        if (!Schema::hasTable('valor_hora'))
            Schema::create('valor_hora', function (Blueprint $table) {
                $table->increments('id');
                $table->double('valor_hora', 5, 2);
                $table->integer('faixa_horaria')->unsigned();
                $table->double('desconto', 3, 2);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('valor_hora');
    }
};
