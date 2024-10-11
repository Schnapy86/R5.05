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
        Schema::create('invitation_code', function (Blueprint $table) {
            $table->foreignId('id_user_owner');
            $table->string('code');
            $table->foreignId('id_user_receiver')->nullable();

            $table->foreign('id_user_owner')->references('id')->on('users');
            $table->foreign('id_user_receiver')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitation_code');
    }
};
