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
        if (!Schema::hasTable('tp_telefone'))
            Schema::create('tp_telefone', function (Blueprint $table) {
                $table->increments('id');
                $table->string('telefone');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('tp_telefone');
    }
};
