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
        Schema::create('influencers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->integer('followers');
            $table->enum('platform', ['Instagram', 'YouTube', 'TikTok', 'Twitter']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('influencers');
    }
};
