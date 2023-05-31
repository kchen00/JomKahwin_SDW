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
        Schema::create('req_consultations', function (Blueprint $table) {
            $table->id("RC_reqConsultation");
            $table->foreignId("U_userID")->references("U_userID")->on("users");
            $table->foreignId("ST_staffID")->references("ST_staffID")->on("staff");
            $table->string("RC_purpose", 50);
            $table->string("RC_paidChoice", 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('req_consultations');
    }
};
