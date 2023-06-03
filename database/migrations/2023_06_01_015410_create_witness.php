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
        Schema::create('Wit_witness', function (Blueprint $table) {
            $table->id("Wit_witnessID");
            $table->foreignId("M_marriageID")->references("M_marriageID")->on("M_marriage");
            $table->string("Wit_name", 50);
            $table->integer("Wit_witNum");
            $table->string("Wit_witIC", 12);
            $table->string("Wit_witAddress", 50);
            $table->integer("Wit_witAge");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('witness');
    }
};
