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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('days', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
        Schema::dropIfExists('animals');
        Schema::dropIfExists('countries');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('people');
    }
};
