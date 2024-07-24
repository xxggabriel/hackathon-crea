<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profissional extends Model
{
    use HasFactory;

    protected $table = "profissionais";

    protected $fillable = [
        'cre_cad_cod', 'dsc_nac', 'dsc_nat', 'dta_exp_idt', 'dta_nsc', 'est_civ',
        'ind_rec', 'nme', 'nro_idt', 'org_exp_idt', 'pis_nac', 'sex', 'tpo_idt',
        'tpo_reg', 'eml', 'nro_cel', 'nro_tel', 'flg_nme_social', 'nome_social',
        'cpf_ast', 'dsc_mun_tit_ele', 'dta_ativa', 'dta_fal', 'dta_fim_reg',
        'dta_fim_vcl_ast', 'dta_ger_rnp', 'dta_ini_reg', 'dta_ini_vcl_ast',
        'dta_recad', 'dta_reg_cre', 'dta_temp', 'dta_val_rnp', 'flg_doador',
        'hpg'
    ];

    // Defina o relacionamento com a tabela CREAs
    public function crea(): BelongsTo
    {
        return $this->belongsTo(CREA::class, 'cre_cad_cod', 'cre_cad_cod');
    }
}
