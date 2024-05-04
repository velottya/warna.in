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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('picture');
            $table->decimal('price', 15, 2);
            $table->integer('stock')->default(0);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->integer('category');
            $table->timestamps();

        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_price', 15, 2);
            $table->string('status');
            $table->timestamps();

        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->index();
            $table->decimal('amount', 15, 2);
            $table->string('method');
            $table->dateTime('paid_at')->nullable();
            $table->string('status')->default('pending'); // pending, confirmed, rejected
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });

        Schema::create('payment_confirmations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->index();
            $table->string('name');
            $table->string('email');
            $table->string('payment_method');
            $table->decimal('amount', 15, 2);
            $table->string('proof_of_payment')->nullable(); // path to uploaded file
            $table->string('status')->default('pending'); // pending, verified, rejected
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_confirmations');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('cart_items');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('product_category');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('products');
    }
};
