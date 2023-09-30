php<?php

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
        Schema::create('tanggapan',function(Blueprint $table){
            $table->integer('id_tanggapan');
            $table->integer('id_pengaduan');
            $table->date('tgl_tanggapan');
            $table->text('tanggapan');
            $table->integer('id_petugas');
            $table->timestamps();
            $table->primary('id_tanggapan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tanggapan');
    }
};
