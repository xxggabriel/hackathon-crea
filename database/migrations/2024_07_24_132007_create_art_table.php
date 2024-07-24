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
        Schema::create('arts', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->date('data_registro');
            $table->enum('tipo', ['obra', 'servico', 'cargo', 'funcao']);
            $table->enum('situacao', ['ativa', 'baixada', 'cancelada']);
            $table->foreignId('responsavel_tecnico_id')->constrained('profissionais');
            $table->string('contratante_nome');
            $table->string('contratante_cnpj');
            $table->string('obra_ou_servico_descricao');
            $table->string('obra_ou_servico_local');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art');
    }
};
