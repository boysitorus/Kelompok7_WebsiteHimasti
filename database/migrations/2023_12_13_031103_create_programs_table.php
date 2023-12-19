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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('detail');
            $table->longText('laporan')->nullable();
            $table->string('divisi');
            $table->string('date')->nullable();
            $table->integer('year')->digits(4);
            $table->string('picture')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign(['year', 'divisi'])
            ->references(['year', 'divisi'])
            ->on('managements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
