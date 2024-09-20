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
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->decimal('value',8, 2)->default(0);
            $table->decimal('rezerv',8, 2)->default(0);
            $table->text('prim')->nullable();
            $table->foreignIdFor(\App\Models\Sklad::class);
            $table->foreignIdFor(\App\Models\Product::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
