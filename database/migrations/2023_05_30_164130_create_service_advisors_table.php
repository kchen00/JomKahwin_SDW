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
        Schema::create('service_advisors', function (Blueprint $table) {
            $table->id("SA_advisorID");
            # decalring the foreign key A_accountID
            $table->integer("A_accountID");
            $table->foreign("A_accountID")->references("A_accountID")->on("accounts");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_advisors');
    }
};
