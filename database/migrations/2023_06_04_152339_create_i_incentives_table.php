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
        Schema::create('I_incentive', function (Blueprint $table) {
            $table->id("I_incentiveID");
            // $table->foreignId('U_userID');
            // $table->foreignId('ST_staffID');
            // $table->foreignId('M_marriageID')->references("M_marriageID")->on("M_marriage");
            // $table->foreignId("D_documentID")->references("D_documentID")->on("D_document");
            $table->enum('I_applicationStatus', ['Lulus', 'Tidak lulus'])->nullable();
            $table->string('I_bankName', 20)->nullable();
            $table->string('I_noAcc', 20)->nullable();
            $table->string('I_relativeName', 20)->nullable();
            $table->string('I_relativePhone', 20)->nullable();
            $table->string('I_relativeAddress', 20)->nullable();
            $table->string('I_relativeCity', 20)->nullable();
            $table->string('I_relativeState', 20)->nullable();
            $table->string('I_relativePostcode', 20)->nullable();
            $table->string('I_relativeRelation', 20)->nullable();
            $table->string('I_relativePhoneHouse', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_incentives');
    }
};
