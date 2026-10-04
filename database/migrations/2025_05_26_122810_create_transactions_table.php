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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->index();
            $table->string('txn_id')->nullable()->unique();
            $table->string('payment_status')->nullable(); // e.g., CHARGED
            $table->string('payment_method')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->string('auth_id_code')->nullable();
            $table->string('rrn')->nullable();
            $table->string('currency', 10)->default('INR');
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_id')->nullable();
            $table->decimal('amount', 12, 2);
            $table->decimal('captured_amount', 12, 2)->nullable();
            $table->decimal('refundable_amount', 12, 2)->nullable();
            $table->text('gateway_response')->nullable();
            $table->json('txn_detail')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamp('order_created_at')->nullable();
            $table->timestamp('order_updated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
