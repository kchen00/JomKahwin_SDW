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
        Schema::create('m_marriages', function (Blueprint $table) {
            $table->id("M_marriageID");
            // $table->foreignId('U_userID');
            // $table->foreignId('ST_staffID');
            $table->foreignId('P_paymentID');
            $table->foreignId('W_waliID');
            $table->foreignId('Wit_witnessID');
            // $table->foreignId('D_documentID');
            $table->string('M_applicationStatus');
            $table->string('M_nikahCategory');
            $table->integer('M_akuanNumber');
            $table->string('M_partnerIC');
            $table->dateTime('M_akadNikahDatetime');
            $table->string('M_akadNikahVenue');
            $table->float('M_masKahwinAmount', 8, 2);
            $table->float('M_hantaranAmount', 8, 2);
            $table->string('M_pemberianLain');
            $table->string('M_jurunikahName');
            $table->string('M_lafaztaliq');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_marriages');
    }
};
