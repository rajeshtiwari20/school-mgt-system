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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('email')->unique();
            $table->unsignedBigInteger('mobile')->unique()->nullable();
            $table->text('address');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_subscribed')->default(false);
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('delete_by');
            $table->enum('updated_user_type', ['ADMIN', 'SCHOOL']);
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });


        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->boolean('is_active')->default(false);
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('delete_by');
            $table->enum('updated_user_type', ['ADMIN', 'SCHOOL']);
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('schools');
    }
};
