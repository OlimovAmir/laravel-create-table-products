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
        Schema::create('weekdays', function (Blueprint $table) {
            $table->id();
            $table->boolean('пн')->default(false);
            $table->boolean('вт')->default(false);
            $table->boolean('ср')->default(false);
            $table->boolean('чт')->default(false);
            $table->boolean('пт')->default(false);
            $table->boolean('сб')->default(false);
            $table->boolean('вс')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekdays');
    }
};
