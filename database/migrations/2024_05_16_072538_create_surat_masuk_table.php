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
        // Check if the table already exists before creating it
        if (!Schema::hasTable('surat_masuk')) {
            Schema::create('surat_masuk', function (Blueprint $table) {
                $table->id('id_kop');
                $table->date('tanggal');
                $table->string('no_surat', 50);
                $table->string('asal_surat', 150);
                $table->string('perihal', 150);
                $table->string('disp1', 70);
                $table->string('disp2', 70);
                $table->unsignedBigInteger('id_tandatgn'); 
                $table->string('image', 60); 
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};