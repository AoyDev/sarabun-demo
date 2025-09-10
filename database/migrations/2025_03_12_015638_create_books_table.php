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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('type', 100)->nullable();
            $table->bigInteger('selectBookregist')->nullable();
            $table->bigInteger('selectBookregistSup')->nullable();
            $table->string('inputBookregistNumber', 255)->nullable();
            $table->string('inputBooknumberOrgStruc', 10)->nullable();
            $table->string('selectBookcircular', 10)->nullable();
            $table->string('inputBooknumberEnd', 100)->nullable();
            $table->bigInteger('selectLevelSpeed')->nullable();
            $table->dateTime('inputRecieveDate')->nullable();
            $table->dateTime('inputPickUpDate')->nullable();
            $table->dateTime('inputDated')->nullable();
            $table->text('inputSubject')->nullable();
            $table->text('inputBookto')->nullable();
            $table->text('inputBookref')->nullable();
            $table->text('inputContent')->nullable();
            $table->text('inputNote')->nullable();
            $table->text('selectBookFrom')->nullable();
            $table->integer('flexCheckChecked')->nullable();
            $table->dateTime('inputDateReport')->nullable();
            $table->text('path')->nullable();
            $table->text('file')->nullable();
            $table->text('default_path')->nullable();
            $table->text('default_file')->nullable();
            $table->bigInteger('status')->default(1);
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->text('fileAttachments')->nullable();
            $table->bigInteger('position_id')->nullable();
            $table->dateTime('adminDated')->nullable();
            $table->bigInteger('adminBooknumber')->nullable();
            $table->text('parentUsers')->nullable();
            $table->text('inputAttachments')->nullable();
            $table->text('selectUsersParent')->nullable();
            $table->bigInteger('selectPositionParent')->nullable();
            $table->bigInteger('is_number_stamp')->nullable();
            $table->integer('sessionPosition')->nullable();
            $table->integer('new_pages')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
