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
        Schema::create('fixedrates', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('metercategory_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('serviceyear_id')->constrained()->cascadeOnDelete();
            $table->integer('serviceyear_id');
            $table->decimal('chargeamount',10,2);
            $table->String('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixedrates');
    }
};
