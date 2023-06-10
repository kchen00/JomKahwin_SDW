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
        Schema::create('PR_passwordResetToken', function (Blueprint $table) {
            $table->id("PR_id");
            $table->foreignId("A_accountID")->references("A_accountID")->on("A_account");
            $table->string("PR_token");
            $table->timestamp("PR_createdAt");
            $table->dateTime("PR_expiredAt");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PR_passwordResetToken');
    }
};
