<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Visto;
use Illuminate\Http\Request;

class VistoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|unique:vistos,id',
            'descricao' => 'required|string',
            'status' => 'required|in:EM_ANALISE,ACEITO,RECUSADO',
            'data_solicitacao' => 'required|date',
        ]);

        $visto = Visto::create($validated);

        return response()->json($visto, 201);
    }

    public function show($id)
    {
        $visto = Visto::find($id);

        if (!$visto) {
            return response()->json(['error' => 'Visto not found'], 404);
        }

        return response()->json($visto);
    }

    public function update(Request $request, $id)
    {
        $visto = Visto::find($id);

        if (!$visto) {
            return response()->json(['error' => 'Visto not found'], 404);
        }

        $validated = $request->validate([
            'descricao' => 'string',
            'status' => 'in:EM_ANALISE,ACEITO,RECUSADO',
            'data_solicitacao' => 'date',
        ]);

        $visto->update($validated);

        return response()->json($visto);
    }

    public function destroy($id)
    {
        $visto = Visto::find($id);

        if (!$visto) {
            return response()->json(['error' => 'Visto not found'], 404);
        }

        $visto->delete();

        return response()->json(['message' => 'Visto deleted successfully']);
    }
}
