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
        Schema::create('microsites', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->nullable()->unsigned();
            $table->string('name');
            $table->string('link');
            $table->bigInteger('id_template')->nullable()->unsigned();
            $table->bigInteger('id_kategori')->nullable()->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onDelete('cascade');
            $table->foreign('id_template')->references('id')->on('templates')->onDelete('cascade')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('microsites');
    }
};
