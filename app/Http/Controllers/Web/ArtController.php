<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Art;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index()
    {
        $arts = Art::all();
        return view('pages.arts.index', compact('arts'));
    }

    public function create()
    {
        return view('pages.arts.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'numero' => 'required|string|max:255',
            'data_registro' => 'required|date',
            'tipo' => 'required|string',
            'situacao' => 'required|string',
            // 'responsavelTecnico_id' => 'required|exists:profissionais,id',
            'contratante_nome' => 'required|string',
            'contratante_cnpj' => 'required|string',
            'obraOuServico_descricao' => 'required|string',
            'obraOuServico_local' => 'required|string',
        ]);

        // USUÁRIO LOGADO
        $responsavelTecnico_id = 1;


        Art::create([
            'numero' => $request->numero,
            'data_registro' => $request->data_registro,
            'tipo' => $request->tipo,
            'situacao' => $request->situacao,
            'responsavel_tecnico_id' => $responsavelTecnico_id,
            'contratante_nome' => $request->contratante_nome,
            'contratante_cnpj' => $request->contratante_cnpj,
            'obra_ou_servico_descricao' => $request->obraOuServico_descricao,
            'obra_ou_servico_local' => $request->obraOuServico_local,
        ]);

        return redirect()->route('arts.index')->with('success', 'ART criada com sucesso.');
    }

    public function show($id)
    {
        $art = Art::find($id);

        return view('pages.arts.show', compact('art'));
    }

    public function edit(Request $request, $id)
    {
        $art = Art::find($id);
        return view('pages.arts.edit', compact('art'));
    }

    public function update(Request $request, $id)
    {
        $art = Art::find($id);

        $request->validate([
            'numero' => 'required|string|max:255',
            'data_registro' => 'required|date',
            'tipo' => 'required|string',
            'situacao' => 'required|string',
            'responsavelTecnico_id' => 'required|exists:profissionais,id',
            'contratante_nome' => 'required|string',
            'contratante_cnpj' => 'required|string',
            'obraOuServico_descricao' => 'required|string',
            'obraOuServico_local' => 'required|string',
        ]);

        $art->update([
            'numero' => $request->numero,
            'data_registro' => $request->data_registro,
            'tipo' => $request->tipo,
            'situacao' => $request->situacao,
            'responsavelTecnico_id' => $request->responsavelTecnico_id,
            'contratante_nome' => $request->contratante_nome,
            'contratante_cnpj' => $request->contratante_cnpj,
            'obraOuServico_descricao' => $request->obraOuServico_descricao,
            'obraOuServico_local' => $request->obraOuServico_local,
        ]);

        return redirect()->route('arts.index')->with('success', 'ART atualizada com sucesso.');
    }

    public function destroy(Art $art)
    {
        $art->delete();
        return redirect()->route('arts.index')->with('success', 'ART excluída com sucesso.');
    }
}
