<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Nigafood;
use App\Models\Nigaprice;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nigafoods', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Food name
            $table->text('description'); // Description of the food
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nigafoods');
    }
};
