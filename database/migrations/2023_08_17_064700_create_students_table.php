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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('admission_no')->unique();
            $table->unsignedBigInteger('onboarding_session_id');
            $table->unsignedBigInteger('offboarding_session_id')->nullable();
            $table->double('fee', 8, 2);
            $table->boolean('is_offboarded')->default(false);
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('delete_by');
            $table->enum('added_user_type', ['ADMIN', 'SCHOOL']);
            $table->enum('updated_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->enum('deleted_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->index(['admission_no']);

            $table->foreign('onboarding_session_id')->references('id')->on('sessions');
            $table->foreign('offboarding_session_id')->references('id')->on('sessions');
        });

        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->enum('name_prefix', ['Mr.', 'Mrs.','Ms.','Miss','Master']);
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('mobile')->unique();
            $table->unsignedBigInteger('email')->unique()->nullable();
            $table->enum('type', ['father', 'mother','guardian']);
            $table->string('photo')->nullable();
            $table->string('identity_no')->unique()->nullable();
            $table->enum('identity_type', ['aadhaar', 'voter','driving']);
            $table->string('identity_doc');
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('delete_by');
            $table->enum('added_user_type', ['ADMIN', 'SCHOOL']);
            $table->enum('updated_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->enum('deleted_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });


        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admission_id')->unique();
            $table->unsignedBigInteger('parent_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->enum('gender', ['male', 'female','others']);
            $table->text('address');
            $table->string('photo')->nullable();
            $table->string('bank_name')->nullable();
            $table->unsignedBigInteger('bank_account_no')->nullable();
            $table->string('bank_ifsc_code')->nullable();
            $table->string('identity_no')->unique()->nullable();
            $table->enum('identity_type', ['aadhaar', 'voter','driving']);
            $table->string('identity_doc');
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('delete_by');
            $table->enum('added_user_type', ['ADMIN', 'SCHOOL']);
            $table->enum('updated_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->enum('deleted_user_type', ['ADMIN', 'SCHOOL'])->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('admission_id')->references('id')->on('admissions');
            $table->foreign('parent_id')->references('id')->on('parents');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('admissions');
        Schema::dropIfExists('parents');
        
    }
};
