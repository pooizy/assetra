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
    Schema::create('assets', function (Blueprint $table) {
        $table->id();
        $table->string('kode_aset')->unique();
        $table->string('nama_aset');
        $table->foreignId('category_id')->constrained('categories')->restrictOnDelete();
        $table->foreignId('room_id')->nullable()->constrained('rooms')->nullOnDelete();
        $table->integer('jumlah')->default(1);
        $table->string('kondisi')->default('Baik');
        $table->foreignId('employee_id')
         ->nullable()
         ->constrained('employees')
         ->nullOnDelete();
        $table->date('tanggal_perolehan')->nullable();
        $table->text('keterangan')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
