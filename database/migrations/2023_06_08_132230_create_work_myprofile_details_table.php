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
        Schema::create('work_myprofile_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('episode_kinds')->nullable();
            $table->text('episode')->nullable();
            $table->string('catchcopy')->nullable();
            $table->string('motivation_1')->nullable();
            $table->string('motivation_2')->nullable();
            $table->string('motivation_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_myprofile_details');
    }
};
