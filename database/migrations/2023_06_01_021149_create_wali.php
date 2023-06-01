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
        Schema::create('W_wali', function (Blueprint $table) {
            $table->id("W_wali");
            $table->foreignId("M_marriageID")->references("M_marriageID")->on("M_marriage");
            $table->string("W_name", 50);
            $table->string("W_IC", 12);
            $table->string("W_address", 50);
            $table->date("W_birthdate");
            $table->integer("W_age");
            $table->string("W_relationship", 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali');
    }
};
