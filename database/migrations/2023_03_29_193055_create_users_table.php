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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('names', 125)->default('N/A');
            $table->string('last_names', 125)->nullable()->default(NULL);
            $table->string('email', 125)->unique();
            $table->string('num_doc',125)->nullable()->default(NULL);
            $table->string('num_phone',125)->nullable()->default(NULL);
            $table->string('user_name', 125)->nullable()->default(NULL);
            $table->string('password', 125);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};