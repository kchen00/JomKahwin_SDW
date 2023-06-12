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
        Schema::create('U_user', function (Blueprint $table) {
            $table->id("U_userID");
            # decalring the foreign key A_accountID
            $table->integer("A_accountID");
            // $table->foreign("A_accountID")->references("A_accountID")->on("A_account");
            $table->string("U_employerName", 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
