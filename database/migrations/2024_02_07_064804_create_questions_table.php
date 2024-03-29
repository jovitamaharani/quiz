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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->text('question');
            $table->text('choice_a');
            $table->text('choice_b');
            $table->text('choice_c');
            $table->text('choice_d');
            $table->enum('answer',['choice_a', 'choice_b', 'choice_c', 'choice_d']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
