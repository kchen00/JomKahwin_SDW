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
        Schema::create('CN_cardNikah', function (Blueprint $table) {
            $table->id("CN_cardNikah");
            $table->foreignId("M_marriageID")->references("M_marriageID")->on("M_marriage");
            $table->foreignId("P_paymentID")->references("P_PaymentID")->on("P_payment");       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
