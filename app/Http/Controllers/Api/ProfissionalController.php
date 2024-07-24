<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cre_cad_cod' => 'required|string|max:99',
            'dsc_nac' => 'required|string|max:12',
            'dsc_nat' => 'required|string|max:24',
            'dta_exp_idt' => 'required|date',
            'dta_nsc' => 'required|date',
            'est_civ' => 'required|in:C,D,N,O,J,S,V',
            'ind_rec' => 'required|in:S,N',
            'nme' => 'required|string|max:60',
            'nro_idt' => 'required|string|max:15',
            'org_exp_idt' => 'required|string|max:15',
            'pis_nac' => 'required|string|max:20',
            'sex' => 'required|in:F,M',
            'tpo_idt' => 'required|string|max:3',
            'tpo_reg' => 'required|string|max:2',
            'eml' => 'required|string|max:50',
            'nro_cel' => 'required|string|max:15',
            'nro_tel' => 'required|string|max:15',
            'flg_nme_social' => 'required|boolean',
            'nome_social' => 'nullable|string|max:60',
            'cpf_ast' => 'nullable|string|max:11',
            'dsc_mun_tit_ele' => 'nullable|string|max:30',
            'dta_ativa' => 'nullable|date',
            'dta_fal' => 'nullable|date',
            'dta_fim_reg' => 'nullable|date',
            'dta_fim_vcl_ast' => 'nullable|date',
            'dta_ger_rnp' => 'nullable|date',
            'dta_ini_reg' => 'nullable|date',
            'dta_ini_vcl_ast' => 'nullable|date',
            'dta_recad' => 'nullable|date',
            'dta_reg_cre' => 'nullable|date',
            'dta_temp' => 'nullable|date',
            'dta_val_rnp' => 'nullable|date',
            'flg_doador' => 'required|boolean',
            'hpg' => 'nullable|string|max:50',
            // Adicionar validações para os relacionamentos de competências e habilidades
        ]);

        $profissional = Profissional::create($validated);

        return response()->json($profissional, 201);
    }

    public function show($rnp)
    {
        $profissional = Profissional::where('cre_cad_cod', $rnp)->first();

        if (!$profissional) {
            return response()->json(['error' => 'Profissional not found'], 404);
        }

        return response()->json($profissional);
    }

    public function update(Request $request, $rnp)
    {
        $profissional = Profissional::where('cre_cad_cod', $rnp)->first();

        if (!$profissional) {
            return response()->json(['error' => 'Profissional not found'], 404);
        }

        $validated = $request->validate([
            'cre_cad_cod' => 'string|max:99',
            'dsc_nac' => 'string|max:12',
            'dsc_nat' => 'string|max:24',
            'dta_exp_idt' => 'date',
            'dta_nsc' => 'date',
            'est_civ' => 'in:C,D,N,O,J,S,V',
            'ind_rec' => 'in:S,N',
            'nme' => 'string|max:60',
            'nro_idt' => 'string|max:15',
            'org_exp_idt' => 'string|max:15',
            'pis_nac' => 'string|max:20',
            'sex' => 'in:F,M',
            'tpo_idt' => 'string|max:3',
            'tpo_reg' => 'string|max:2',
            'eml' => 'string|max:50',
            'nro_cel' => 'string|max:15',
            'nro_tel' => 'string|max:15',
            'flg_nme_social' => 'boolean',
            'nome_social' => 'string|max:60',
            'cpf_ast' => 'string|max:11',
            'dsc_mun_tit_ele' => 'string|max:30',
            'dta_ativa' => 'date',
            'dta_fal' => 'date',
            'dta_fim_reg' => 'date',
            'dta_fim_vcl_ast' => 'date',
            'dta_ger_rnp' => 'date',
            'dta_ini_reg' => 'date',
            'dta_ini_vcl_ast' => 'date',
            'dta_recad' => 'date',
            'dta_reg_cre' => 'date',
            'dta_temp' => 'date',
            'dta_val_rnp' => 'date',
            'flg_doador' => 'boolean',
            'hpg' => 'string|max:50',
        ]);

        $profissional->update($validated);

        return response()->json($profissional);
    }

    public function destroy($rnp)
    {
        $profissional = Profissional::where('cre_cad_cod', $rnp)->first();

        if (!$profissional) {
            return response()->json(['error' => 'Profissional not found'], 404);
        }

        $profissional->delete();

        return response()->json(['message' => 'Profissional deleted successfully']);
    }
}
