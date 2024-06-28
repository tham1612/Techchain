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
            $table->foreignIdFor(\App\Models\Catelogue::class)->constrained();
            $table->string('name');
            $table->string('Slug')->unique();
            $table->string('sku')->unique();
            $table->string('img_thumbnail')->nullable();
            $table->double('price_regular');
            $table->double('price_sale')->nullable();
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->string('material')->nullable()->comment('chat lieu');
            $table->text('user_maual')->nullable()->comment('huong dan su dung');
            $table->unsignedBigInteger('view')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_hot_deal')->default(false);
            $table->boolean('is_good_deal')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_show_home')->default(false);
//            $table->enum('status',['draft','pending-review','published'])->default(true);
//            $table->date('published_at')->comment('lap lich');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
