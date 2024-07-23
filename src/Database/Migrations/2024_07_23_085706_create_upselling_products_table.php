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
        Schema::create('upselling_products', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('discount_type')->comment('The type of discount that is applied to the upselling product');
            $table->decimal('discount_value', 10, 4)->comment('The value of the discount that is applied to the upselling product')->default(0.0000);
            $table->unsignedBigInteger('upselling_product_id')->comment('The ID of the upselling product');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->comment('The ID of the product that is being upsold');
            $table->tinyInteger('status')->comment('The status of the upselling product')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upselling_products');
    }
};
