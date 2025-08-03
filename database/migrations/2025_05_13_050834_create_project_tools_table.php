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
        Schema::create('project_tools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tool_id')->constrained()->onDelete('cascade');
            //jika fk adalah varchar (harus unique)
            //$table->string('tool_name');
            //$table->foreign('tool_name')->references('name')->on('tools')->onDelete('cascade');
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            //foreignId kolom yang menghubungkan ke tabel lain (foreign key)
            //constrained() , laravel ototmatis mengambil id di dalam tabel tools (jika fk sama dengan nama tabel)
            //jika nama tabel berbeda dengan id fk maka $table->foreignId('project_id')->constrained('portofolio_projects');
            //onDelete('cascade') , kalau data tools atau project dihapus maka data yang berkaitan di tabel ini juga akan ikut dihapus
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tools');
    }
};
