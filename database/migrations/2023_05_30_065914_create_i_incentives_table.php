<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('i_incentives', function (Blueprint $table) {
            $table->id("I_incentiveID");
            // $table->foreignId('U_userID');
            // $table->foreignId('ST_staffID');
            $table->foreignId('M_marriageID');
            $table->enum('I_applicationStatus', ['Lulus', 'Tidak lulus']);
            $table->string('I_bankName');
            $table->string('I_noAcc');
            $table->string('I_relativeName');
            $table->string('I_relativePhone');
            $table->string('I_relativeAddress');
            $table->string('I_relativeCity');
            $table->string('I_relativeState');
            $table->string('I_relativePostcode');
            $table->string('I_relativeRelation');
            $table->string('I_relativePhoneHouse');
            // $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('i_incentives');
    }
};
