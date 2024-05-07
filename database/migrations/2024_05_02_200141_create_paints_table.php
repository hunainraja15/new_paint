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
        Schema::create('paints', function (Blueprint $table) {
            $table->id();
            $table->string('employee')->nullable();
            $table->string('job')->nullable();
            $table->string('task')->nullable();
            $table->string('start_hour')->nullable();
            $table->string('start_minutes')->nullable();
            $table->string('stop_hour')->nullable();
            $table->string('stop_minutes')->nullable();
            $table->string('total_time')->nullable();
            $table->string('finished')->nullable();
            $table->string('primer')->nullable();
            $table->string('stock_paint')->nullable();
            $table->string('paint_board')->nullable();
            $table->string('name_and_code')->nullable();
            $table->string('cost')->nullable();
            $table->string('quantity')->nullable();
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paints');
    }
};
