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
        Schema::create('transaksi_detail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->nullable()->unsigned();
            $table->bigInteger('id_transaksi')->nullable()->unsigned();
            $table->bigInteger('id_produk')->nullable()->unsigned();
            $table->integer('kuantiti');
            $table->integer('subtotal');
            $table->string('type');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_transaksi')->references('id')->on('transaksi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_produk')->references('id')->on('micrositeslot')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_detail');
    }
};
