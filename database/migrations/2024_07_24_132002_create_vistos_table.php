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
        Schema::create('vistos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('descricao');
            $table->enum('status', ['EM_ANALISE', 'ACEITO', 'RECUSADO']);
            $table->dateTime('data_solicitacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vistos');
    }
};
