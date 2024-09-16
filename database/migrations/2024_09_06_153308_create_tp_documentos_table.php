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
        if (!Schema::hasTable('tp_documento'))
            Schema::create('tp_documento', function (Blueprint $table) {
                $table->increments('id');
                $table->string('documento');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('tp_documento');
    }
};
