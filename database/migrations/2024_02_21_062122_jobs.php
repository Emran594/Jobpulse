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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('position');
            $table->unsignedBigInteger('category_id');
            $table->enum('type', ['full-time', 'part-time', 'contract', 'freelance']);
            $table->string('vacancy');
            $table->string('experience');
            $table->date('due_date');
            $table->text('benefits');
            $table->text('requirements');
            $table->decimal('salary', 10, 2);
            $table->string('tags');
            $table->integer('is_active')->default(1);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
