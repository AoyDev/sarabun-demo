<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('log_active_books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->nullable();
            $table->float('status')->nullable();
            $table->string('datetime', 100)->nullable();
            $table->text('detail')->nullable();
            $table->bigInteger('book_id')->nullable();
            $table->bigInteger('position_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_active_books');
    }
};
