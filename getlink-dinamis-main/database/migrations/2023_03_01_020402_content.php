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
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('microsite_id')->unsigned()->nullable();
            $table->String('image');
            $table->String('link');
            $table->String('title');
            $table->String('description');
            $table->timestamps();
            $table->foreign('microsite_id')->references('id')->on('microsites')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role');
    }
};
