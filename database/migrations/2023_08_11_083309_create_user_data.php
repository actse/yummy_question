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
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->string('fitness');
            $table->string('name');
            $table->string('phone');
            $table->text('ref_code');
            $table->text('question1');
            $table->text('question2');
            $table->text('question3');
            $table->text('question4');
            $table->text('question5');
            $table->text('question6');
            $table->text('question7');
            $table->text('question8');
            $table->text('question9');
            $table->text('question10');
            $table->text('question11');
            $table->text('question12');
            $table->text('question13');
            $table->text('question14');
            $table->text('question15');
            $table->text('moreQuestion1');
            $table->text('moreQuestion2');
            $table->text('moreQuestion3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};
