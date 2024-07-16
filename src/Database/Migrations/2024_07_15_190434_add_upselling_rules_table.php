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
            $table->string('name');
            $table->string('description')->comment('description of the rule')->nullable();
            $table->chat('type', 50)->comment("type of the rule");
            $table->tinyInteger('status')->default(1)->comment('status of the rule');
            $table->json('conditions')->nullable()->comment('conditions rules');
            $table->float('discount', 8, 4)->default(0)->comment('discount of the rule');
            $table->tinyInteger('sort_order')->default(0)->comment('sort order'); 
            $table->tinyInteger('is_end')->default(0)->comment('is end of the rule');
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
