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
        Schema::create('staff', function (Blueprint $table) {
            $table->id("ST_staffID");
            # decalring the foreign key A_accountID
            $table->integer("A_accountID");
            $table->foreign("A_accountID")->references("A_accountID")->on("accounts");
            $table->string("ST_staffPosition", 50);
            $table->string("ST_staffAccessLevel", 50);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
