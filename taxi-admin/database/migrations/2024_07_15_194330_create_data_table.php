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
        Schema::dropIfExists('data');
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('type_id')->constrained(table: 'types');
            $table->foreignId('vehicle_id')->constrained(table: 'vehicles');
            $table->unsignedInteger("value");
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
