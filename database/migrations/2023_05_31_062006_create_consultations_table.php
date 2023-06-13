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
        Schema::create('CO_consultations', function (Blueprint $table) {
            $table->id("CO_consultationID");
            // $table->integer("SA_advisorID");
            $table->foreignId("SA_advisorID")->references("SA_advisorID")->on("SA_serviceAdvisor");
            // $table->integer("U_userID");
            $table->foreignId("U_userID")->references("U_userID")->on("U_user");
            $table->string("CO_purpose", 50);
            $table->date("CO_date");
            $table->time("CO_time");
            $table->string("CO_paidChoice", 50);
            $table->string("CO_applicationStatus", 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
