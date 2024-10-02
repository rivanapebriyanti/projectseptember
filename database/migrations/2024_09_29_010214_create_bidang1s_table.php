<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bidang1s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->string('fotobidang1')->nullable();
            // $table->text('tugas');
            $table->string('anggota');
            $table->string('nama');
            $table->string('kelas');
            $table->string('quotes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidang1s');
    }
};
