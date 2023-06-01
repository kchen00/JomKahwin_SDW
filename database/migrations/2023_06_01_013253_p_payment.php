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
        Schema::create('P_payment', function (Blueprint $table) {
            $table->id("P_paymentID");
            $table->foreignId("U_userID")->references("U_userID")->on("U_user");
            $table->timestamp("P_patmentDateTime");
            $table->string("P_paymentType", 20);
            $table->string("P_amount", 20);
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
