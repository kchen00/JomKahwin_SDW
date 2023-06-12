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
            $table->enum('I_applicationStatus', ['Lulus', 'Tidak lulus', 'Dalam Proses'])->nullable();
            $table->string('I_bankName', 20)->nullable();
            $table->string('I_noAcc', 50)->nullable();
            $table->string('I_relativeName', 20)->nullable();
            $table->string('I_relativePhone', 20)->nullable();
            $table->string('I_relativeAddress', 50)->nullable();
            $table->string('I_relativeRelation', 20)->nullable();
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
