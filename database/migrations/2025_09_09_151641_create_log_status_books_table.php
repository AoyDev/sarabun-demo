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
        Schema::create('log_status_books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('book_id')->nullable();
            $table->float('status')->nullable();
            $table->string('file', 100)->nullable();
            $table->datetime('datetime')->nullable();
            $table->bigInteger('position_id')->nullable();
            $table->bigInteger('adminBookNumber')->nullable();
            $table->datetime('adminDated')->nullable();
            $table->bigInteger('parentUsers')->nullable();
            $table->integer('new_pages')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_status_books');
    }
};
