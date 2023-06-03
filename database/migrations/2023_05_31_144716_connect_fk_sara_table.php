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
        Schema::table('M_marriage', function (Blueprint $table) {
            $table->foreignId("ST_staffID")->references("ST_staffID")->on("ST_staff");
            $table->foreignId("U_userID")->references("U_userID")->on("U_user");
        });

        Schema::table('I_incentive', function (Blueprint $table) {
            $table->foreignId("ST_staffID")->references("ST_staffID")->on("ST_staff");
            $table->foreignId("U_userID")->references("U_userID")->on("U_user");
            $table->foreignId("D_documentID")->references("D_documentID")->on("D_document");
            $table->foreignId('M_marriageID')->references("M_marriageID")->on("M_marriage");
        });

        Schema::table('D_document', function (Blueprint $table) {
            $table->foreignId("ST_staffID")->references("ST_staffID")->on("ST_staff");
            $table->foreignId("U_userID")->references("U_userID")->on("U_user");
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
