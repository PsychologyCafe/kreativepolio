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
        Schema::create('projects', function (Blueprint $table) {
            //table
            $table->id();
            $table->string('name');
            $table->string('slug')->unique(); //untuk generate no unik seperti, project1, project2, dst
            $table->string('cover');
            $table->text('about');
            $table->string('category');
            //agar ketika data dihapus, tidak benar-benar dihapus dari database, tapi hanya disembunyikan. Jadi bisa dipulihkan lagi kalau diperlukan.
            $table->softDeletes(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
