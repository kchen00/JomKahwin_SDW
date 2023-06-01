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
        Schema::create('C_MarriageCourse', function (Blueprint $table) {
            $table->id('C_courseID');
            $table->foreignId("ST_staffID")->references("ST_staffID")->on("ST_staff");
            $table->dateTime("C_courseDateTime");
            $table->string("C_courseVenue", 50);
            $table->string("C_displayCourse", 50);
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
