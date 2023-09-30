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
        Schema::create('masyarakat',function(Blueprint $table){
            $table->char('nik',16);
            $table->string('nama',35);
            $table->string('username',25);
            $table->string('password',32);
            $table->string('telp',13);
            $table->timestamps();
            $table->primary('nik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('masyarakat');
    }
};
