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
        Schema::create('members', function (Blueprint $table) {
            $table->string('nim');
            $table->string('nama');
            $table->string('divisi');
            $table->string('jabatan');
            $table->integer('year')->digits(4);
            $table->string('picture')->nullable();
            $table->timestamps();

            $table->primary(['nim', 'year']);

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
        Schema::dropIfExists('members');
    }
};
