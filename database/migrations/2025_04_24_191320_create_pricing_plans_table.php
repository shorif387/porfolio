<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// database/migrations/xxxx_xx_xx_create_pricing_plans_table.php

return new class extends Migration {
    public function up(): void {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('features');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('pricing_plans');
    }
};
