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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->integer('product_id');
            $table->integer('qty');
            $table->decimal('price', 15, 2);
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('full_name');
            $table->text('address');
            $table->string('phone_number');
            $table->text('note')->nullable();
            $table->decimal('total_price', 15, 2);
            $table->string('status')->default('pending'); // Default status pesanan adalah pending
            $table->timestamps();
        
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
        
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->index();
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp');
            $table->text('catatan')->nullable();
            $table->date('tanggal_transfer');
            $table->decimal('total_pembelian', 15, 2);
            $table->decimal('jumlah_transfer', 15, 2);
            $table->string('transfer_melalui');
            $table->string('bukti_pembayaran')->nullable();
            $table->string('confirmation_status')->default('pending'); // pending, verified, rejected
            $table->timestamps();
        
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('payment_confirmations');
    }
};
