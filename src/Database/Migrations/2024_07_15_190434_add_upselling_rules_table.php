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
        //
        Schema::create('upselling_rules', function (Blueprint $table) {
            $table->increments('id');
            
            $table->char('name', 255)->comment('name of the rule');
            $table->string('description')->comment('description of the rule')->nullable();
            $table->string('conditions_type', 50)->comment("conditions rules type 'product', 'category', 'quantity', 'weight', 'price', 'customer', 'cart', 'time', 'date', 'day', 'month', 'year'");
            $table->string('condition_value', 255)->comment("conditions rules value ID or value based on the condition_type");
            $table->string('rule_type', 50)->comment("type of the rule 'fixed', 'percentage', 'bundle', 'tiered', 'dynamic'");
            $table->decimal('discount', 10, 4)->default(0)->comment('discount of the rule');
            $table->json('conditions')->nullable()->comment('conditions rules');
            $table->tinyInteger('status')->default(1)->comment('status of the rule');


            // $table->string('description')->comment('description of the rule')->nullable();
            // $table->chat('type', 50)->comment("type of the rule");
            // $table->tinyInteger('status')->default(1)->comment('status of the rule');
            // $table->json('conditions')->nullable()->comment('conditions rules');
            // $table->float('discount', 8, 4)->default(0)->comment('discount of the rule');
            // $table->tinyInteger('sort_order')->default(0)->comment('sort order'); 
            // $table->tinyInteger('is_end')->default(0)->comment('is end of the rule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('upselling_rules');
    }
};
