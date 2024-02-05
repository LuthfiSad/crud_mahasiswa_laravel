<?php

use App\Models\ClassMahasiswa;
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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim')->unique();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('class_mahasiswa_id');
            $table->foreign('class_mahasiswa_id')->references('id')->on('class_mahasiswas')->onDelete('cascade');
            // $table->foreignIdFor(ClassMahasiswa::class);
            $table->string('tempat')->nullable();
            $table->date('lahir')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
