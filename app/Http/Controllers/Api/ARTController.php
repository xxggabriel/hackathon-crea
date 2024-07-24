<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ART;
use Illuminate\Http\Request;

class ARTController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'numero' => 'required|string',
            'data_registro' => 'required|date',
            'tipo' => 'required|in:obra,servico,cargo,funcao',
            'situacao' => 'required|in:ativa,baixada,cancelada',
            'responsavel_tecnico_id' => 'required|exists:profissionais,id',
            'contratante_nome' => 'required|string',
            'contratante_cnpj' => 'required|string',
            'obra_ou_servico_descricao' => 'required|string',
            'obra_ou_servico_local' => 'required|string',
        ]);

        $art = ART::create($validated);

        return response()->json($art, 201);
    }

    public function show($id)
    {
        $art = ART::find($id);

        if (!$art) {
            return response()->json(['error' => 'ART not found'], 404);
        }

        return response()->json($art);
    }

    public function update(Request $request, $id)
    {
        $art = ART::find($id);

        if (!$art) {
            return response()->json(['error' => 'ART not found'], 404);
        }

        $validated = $request->validate([
            'numero' => 'string',
            'data_registro' => 'date',
            'tipo' => 'in:obra,servico,cargo,funcao',
            'situacao' => 'in:ativa,baixada,cancelada',
            'responsavel_tecnico_id' => 'exists:profissionais,id',
            'contratante_nome' => 'string',
            'contratante_cnpj' => 'string',
            'obra_ou_servico_descricao' => 'string',
            'obra_ou_servico_local' => 'string',
        ]);

        $art->update($validated);

        return response()->json($art);
    }

    public function destroy($id)
    {
        $art = ART::find($id);

        if (!$art) {
            return response()->json(['error' => 'ART not found'], 404);
        }

        $art->delete();

        return response()->json(['message' => 'ART deleted successfully']);
    }
}
