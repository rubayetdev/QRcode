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
        Schema::create('productqr',function (Blueprint $table){
            $table->id();
            $table->string('user_id');
            $table->string('username');
            $table->string('company_name');
            $table->string('product_name');
            $table->bigInteger('batch_number');
            $table->timestamp('making_date');
            $table->timestamp('expired_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productqr');
    }
};
