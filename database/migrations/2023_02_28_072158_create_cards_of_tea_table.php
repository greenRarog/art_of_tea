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
        Schema::create('cards_of_tea', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('group')->nullable();
            $table->string('country')->nullable();
            $table->float('cost')->nullable();
            $table->string('season')->nullable();
            $table->text('appearance')->nullable();
            $table->text('aroma_dry_tea')->nullable();
            $table->text('infusion')->nullable();
            $table->text('color')->nullable();
            $table->text('aroma_infusion')->nullable();
            $table->text('taste_infusion')->nullable();
            $table->text('aftertaste')->nullable();
            $table->text('impression')->nullable();
            $table->float('rating')->default(0);
            $table->integer('author_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards_of_tea');
    }
};
