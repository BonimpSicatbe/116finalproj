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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // Movie title
            $table->string('director'); // Director's name
            $table->dateTime('date'); // Release date
            $table->string('cast'); // Cast members
            $table->time('run_time'); // Runtime in HH:mm:ss format
            $table->text('synopsis'); // Synopsis of the movie
            $table->timestamps(); // Adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
