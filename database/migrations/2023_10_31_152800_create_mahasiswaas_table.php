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
        Schema::create('mahasiswaas', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10);
            $table->string('fullname', 50);
            $table->string('nickname', 50);
            $table->enum('jeniskelamin', ['Laki - Laki', 'Perempuan']);
            $table->string('email', 25);
            $table->string('prodi', 50);
            $table->string('tgllahir', 50);
            $table->string('hobi', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswaas');
    }
};
