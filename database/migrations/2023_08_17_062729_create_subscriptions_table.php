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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('amount', 8, 2);
            $table->unsignedInteger('subscription_days')->default(0);
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('delete_by');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
        
        Schema::create('subscription_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscription_id');
            $table->string('name');
            $table->string('payment_referenece')->nullable();
            $table->enum('payment_method', ['CASH','UPI']);
            $table->double('amount', 8, 2);
            $table->unsignedInteger('subscription_days')->default(0);
            $table->unsignedBigInteger('added_by');
            $table->timestamps();


            $table->foreign('subscription_id')->references('id')->on('subscriptions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_histories');
        Schema::dropIfExists('subscriptions');
    }
};
