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
        Schema::create('nigaprices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nigafood_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 8, 2); // Make sure this is set to NOT NULL
            $table->string('currency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nigaprices');
    }
};
