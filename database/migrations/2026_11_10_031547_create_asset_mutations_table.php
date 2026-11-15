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
    Schema::create('asset_mutations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('asset_id')->constrained('assets')->restrictOnDelete();
        $table->foreignId('from_room_id')->nullable()->constrained('rooms')->nullOnDelete();
        $table->foreignId('to_room_id')->nullable()->constrained('rooms')->nullOnDelete();
        $table->date('tanggal_mutasi');
        $table->text('alasan')->nullable();
        $table->text('keterangan')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_mutations');
    }
};
