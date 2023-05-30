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
        Schema::create('lancamento_geral', function (Blueprint $table) {
            $table->id();
            $table->integer('login');
            $table->integer('idMasterUser');
            $table->integer('idIndicado');
            $table->decimal('valor',8,2);
            $table->integer('semana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lancamento_geral');
    }
};
