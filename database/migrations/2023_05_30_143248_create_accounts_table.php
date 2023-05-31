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
        Schema::create('accounts', function (Blueprint $table) {
            $table->integer("A_accountID")->autoIncrement();
            $table->string('A_password', 20);
            $table->enum("A_accountType", ["S", "N"]);
            $table->string("A_icNum", 12)->unique();
            $table->string("A_email", 100)->unique();
            $table->enum("A_gender", ["M", "F"]);
            $table->string("A_name", 50)->nullable();
            $table->string("A_telephoneNum", 12)->nullable();
            $table->string("A_ethnicity", 12)->nullable();
            $table->string("A_nationality", 2)->nullable();
            $table->string("A_houseAddress", 50)->nullable();
            $table->string("A_landlineNumber", 50)->nullable();
            $table->string("A_jobSector", 20)->nullable();
            $table->string("A_jobAddress", 50)->nullable();
            $table->float("A_income")->nullable();
            $table->enum("A_marriageStatus", ["single", "married", "divorced", "polygamy"])->nullable();
            $table->string("A_educationLevel", 20)->nullable();
            $table->string("A_profilePhoto")->nullable();
            $table->timestamp("A_lastUpdated")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
