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
        Schema::table('m_marriages', function (Blueprint $table) {
            $table->foreignId("ST_staffID")->references("ST_staffID")->on("staff");
            $table->foreignId("U_userID")->references("U_userID")->on("users");
        });

        Schema::table('i_incentives', function (Blueprint $table) {
            $table->foreignId("ST_staffID")->references("ST_staffID")->on("staff");
            $table->foreignId("U_userID")->references("U_userID")->on("users");
            $table->foreignId("D_documentID")->references("D_documentID")->on("d_documents");
        });

        Schema::table('d_documents', function (Blueprint $table) {
            $table->foreignId("ST_staffID")->references("ST_staffID")->on("staff");
            $table->foreignId("U_userID")->references("U_userID")->on("users");
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
