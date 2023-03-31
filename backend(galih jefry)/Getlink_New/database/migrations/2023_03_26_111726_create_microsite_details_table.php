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
        Schema::create('microsite_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_template')->nullable()->unsigned();
            $table->bigInteger('id_microsite')->nullable()->unsigned();
            $table->integer('order');
            $table->string('id_komponen');
            $table->foreign('id_template')->references('id')->on('templates')->onDelete('cascade')->onDelete('cascade');
            $table->foreign('id_microsite')->references('id')->on('microsites')->onDelete('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('microsite_details');
    }
};
