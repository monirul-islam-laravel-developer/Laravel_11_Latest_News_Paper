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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('number');
            $table->string('alt_number')->nullable();
            $table->integer('order_total');
            $table->integer('regular_price')->nullable();
            $table->integer('selling_price')->nullable();
            $table->integer('discount_price')->nullable();
            $table->string('coupon_discount')->nullable();
            $table->string('coupon_code')->nullable();
            $table->text('transaction_id')->nullable();
            $table->text('transaction_image')->nullable();
            $table->string('website_name')->nullable();
            $table->string('old_website')->nullable();
            $table->text('order_date')->nullable();
            $table->text('order_timestamp')->nullable();
            $table->string('payment_status')->default('pending');
            $table->string('payment_method');
            $table->integer('payment_amount')->default(0);
            $table->text('payment_date')->nullable();
            $table->text('payment_timestamp')->nullable();
            $table->text('delivery_date')->nullable();
            $table->text('delivery_timestamp')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
