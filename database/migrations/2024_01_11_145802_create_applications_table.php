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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedBigInteger('tender_id');
            $table->foreign('tender_id')->references('id')->on('tenders');
            $table->tinyInteger('payment_type')->nullable();
            $table->float('price')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->tinyInteger('is_check')->nullable();
            $table->unique(['tender_id', 'is_check']);
            $table->unique(['customer_id', 'tender_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
