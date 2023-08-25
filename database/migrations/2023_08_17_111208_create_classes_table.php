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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_active')->defult(true);
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('delete_by')->nullable();
            $table->enum('added_user_type', ['ADMIN', 'SCHOOL']);
            $table->enum('updated_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->enum('deleted_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
        
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->string('name');
            $table->boolean('is_active')->defult(true);
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('delete_by')->nullable();
            $table->enum('added_user_type', ['ADMIN', 'SCHOOL']);
            $table->enum('updated_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->enum('deleted_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('class_id')->references('id')->on('classes');
        });


        Schema::create('student_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('session_id');
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('delete_by')->nullable();
            $table->enum('added_user_type', ['ADMIN', 'SCHOOL']);
            $table->enum('updated_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->enum('deleted_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('session_id')->references('id')->on('sessions');

            $table->index(['class_id', 'session_id']);
            $table->index(['class_id', 'section_id', 'session_id']);
            $table->index(['class_id', 'section_id', 'session_id', 'student_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
        Schema::dropIfExists('classes');
    }
};
