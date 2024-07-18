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
        Schema::create('_inverted_index', function (Blueprint $table) {
            $table->id();
        
            $table->string('Term');
            $table->string('DocumentTerms');
            $table->integer('DocumentID');
            $table->integer('TermFrequency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_inverted_index');
    }
};
