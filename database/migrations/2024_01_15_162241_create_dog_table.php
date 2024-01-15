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
        Schema::create('dog', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('race_id');
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('hair_id');
            $table->unsignedBigInteger('country_id');
            $table->timestamps();

            $table->foreign('race_id')->references('id')->on('race')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('size_id')->references('id')->on('size')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('hair_id')->references('id')->on('hair')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('country_id')->references('id')->on('country')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dog');
    }
};
