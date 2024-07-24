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
        Schema::create('profissionais', function (Blueprint $table) {
            $table->id();
            $table->string('cre_cad_cod', 99);
            $table->string('dsc_nac', 12);
            $table->string('dsc_nat', 24);
            $table->dateTime('dta_exp_idt');
            $table->dateTime('dta_nsc');
            $table->enum('est_civ', ['C', 'D', 'N', 'O', 'J', 'S', 'V']);
            $table->enum('ind_rec', ['S', 'N']);
            $table->string('nme', 60);
            $table->string('nro_idt', 15);
            $table->string('org_exp_idt', 15);
            $table->string('pis_nac', 20);
            $table->enum('sex', ['F', 'M']);
            $table->string('tpo_idt', 3);
            $table->string('tpo_reg', 2);
            $table->string('eml', 50);
            $table->string('nro_cel', 15);
            $table->string('nro_tel', 15);
            $table->boolean('flg_nme_social');
            $table->string('nome_social', 60)->nullable();
            $table->string('cpf_ast', 11)->nullable();
            $table->string('dsc_mun_tit_ele', 30)->nullable();
            $table->dateTime('dta_ativa')->nullable();
            $table->dateTime('dta_fal')->nullable();
            $table->dateTime('dta_fim_reg')->nullable();
            $table->dateTime('dta_fim_vcl_ast')->nullable();
            $table->dateTime('dta_ger_rnp')->nullable();
            $table->dateTime('dta_ini_reg')->nullable();
            $table->dateTime('dta_ini_vcl_ast')->nullable();
            $table->dateTime('dta_recad')->nullable();
            $table->dateTime('dta_reg_cre')->nullable();
            $table->dateTime('dta_temp')->nullable();
            $table->dateTime('dta_val_rnp')->nullable();
            $table->boolean('flg_doador');
            $table->string('hpg', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profissionals');
    }
};
