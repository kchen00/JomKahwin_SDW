<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('D_document', function (Blueprint $table) {
            $table->id("D_documentID");
            // $table->foreignId('U_userID');
            // $table->foreignId('AD_adminID');
            $table->string('D_documentType');
            $table->string('D_document');
            // $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('d_documents');
    }
};
