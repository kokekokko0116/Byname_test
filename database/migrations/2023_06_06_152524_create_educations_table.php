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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('school_name')->nullable();
            $table->string('school_department')->nullable();
            $table->year('entrance_year')->nullable(); // 入学年
            $table->year('graduation_year')->nullable(); // 卒業年（未卒の場合はNULL）
            $table->text('school_activity')->nullable();
            // $table->string('school_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
