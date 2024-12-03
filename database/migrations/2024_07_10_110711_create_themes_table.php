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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('sub-category_id')->nullable();
            $table->text('link')->nullable();
            $table->float('regular_price')->nullable();
            $table->float('selling_price')->nullable();
            $table->text('browser')->nullable();
            $table->text('software_version')->nullable();
            $table->text('support')->nullable();
            $table->longText('detail')->nullable();
            $table->longText('more_detail')->nullable();
            $table->text('image')->nullable();
            $table->longText('seo_tag')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 is active 0 in active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
