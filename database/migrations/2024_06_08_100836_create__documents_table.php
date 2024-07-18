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
        Schema::create('_documents', function (Blueprint $table) {
            $table->id();
            
            $table->string('Documents');
            $table->string('Category');
            $table->string('URL');
            $table->string('Content');
            $table->string('Title');
            $table->integer('DocumentID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_documents');
    }
};
