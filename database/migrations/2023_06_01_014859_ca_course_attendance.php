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
        Schema::create('CA_courseAttendance', function (Blueprint $table) {
            $table->id("CA_attendanceID");
            $table->foreignId("C_courseID")->references("C_courseID")->on("C_MarriageCourse");
            $table->foreignId("U_userID")->references("U_userID")->on("U_user");
            $table->foreignId("P_paymentID")->references("P_paymentID")->on("P_payment");
            $table->string("CA_courseResult", 50);
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
