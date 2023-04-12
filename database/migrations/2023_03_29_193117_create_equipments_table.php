<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mark',125)->nullable();
            $table->string('model',125)->nullable();
            $table->string('serial',125)->nullable();
            $table->string('size_disk',125)->nullable();
            $table->string('type_disk',125)->nullable();
            $table->string('ram',125)->nullable();
            $table->string('processor',125)->nullable();
            $table->string('operating_system',125)->nullable();
            $table->integer('usb_ports')->nullable();
            $table->integer('audio_ports')->nullable();
            $table->integer('microphone_ports')->nullable();
            $table->integer('hdmi_ports')->nullable();
            $table->integer('vga_ports')->nullable();
            $table->integer('dvi_ports')->nullable();
            $table->integer('sd_ports')->nullable();
            $table->integer('cd_ports')->nullable();
            $table->integer('ps2_ports')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
