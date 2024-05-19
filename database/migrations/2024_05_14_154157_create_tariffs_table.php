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
        Schema::create('tariffs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Metercategory_id')->constrained()->cascadeOnDelete();
            //$table->foreignId('serviceyear_id')->constrained()->cascadeOnDelete();
            $table->integer('serviceyear_id');
            $table->integer('minrange');
            $table->integer('maxrange');
            $table->decimal('payrate',10,5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tariffs');
    }
};
