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
        Schema::create('donasi', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->unsignedBigInteger('nominal');
            $table->string('foto_bukti')->nullable();
            $table->string('nama_donatur');
            $table->string('alamat');
            $table->integer('telpon');
            $table->string('email');
            $table->string('pesan');
            $table->unsignedBigInteger('blog_id');
            $table->string('metode_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi');
    }
};
