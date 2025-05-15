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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->json('platform');
            $table->json('genre');
            $table->string('status')->default('developping'); // Status of the developer's work on the game (developping, alpha, beta, gold, released)
            $table->timestamp('released_at');
            $table->unsignedBigInteger('publisher_id');
            $table->unsignedBigInteger('developer_id');
            $table->timestamps();

            $table->foreign('publisher_id')->references('id')->on('publishers')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('developer_id')->references('id')->on('developers')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
