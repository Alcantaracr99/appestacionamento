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
        if (!Schema::hasTable('faixa_horaria'))
            Schema::create('faixa_horaria', function (Blueprint $table) {
                $table->increments('id');
                $table->string('faixa_horaria');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('faixa_horaria');
    }
};
