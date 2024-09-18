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
        if (!Schema::hasTable('documento'))
            Schema::create('documento', function (Blueprint $table) {
                $table->increments('id');
                $table->string('documento');
                $table->integer('id_cliente')->unsigned();
                $table->integer('tp_documento')->unsigned();
                $table->timestamp('created_at');
                $table->timestamp('updated_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('documento');
        Schema::table('documento', function (Blueprint $table) {
            $table->foreign('tp_documento')->references('id')->on('tp_documento');
        });

    }
};
