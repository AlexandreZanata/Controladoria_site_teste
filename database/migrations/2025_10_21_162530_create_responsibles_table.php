<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('responsibles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role'); // "Função"
            $table->text('about');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('responsibles');
    }
};


