<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Visto;
use Illuminate\Http\Request;

class VistoController extends Controller
{
    // Mostrar a lista de vistos
    public function index()
    {
        $vistos = Visto::all(); // Obter todos os vistos do banco de dados
        return view('pages.vistos.index', compact('vistos')); // Retornar a view com a lista de vistos
    }

    // Mostrar o formulário para criar um novo visto
    public function create()
    {
        return view('pages.vistos.create'); // Retornar a view para criar um novo visto
    }

    // Armazenar um novo visto no banco de dados
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'descricao' => 'required|string|max:255',
            'status' => 'required|string|in:EM_ANALISE,ACEITO,RECUSADO',
            'dataSolicitacao' => 'required|date',
        ]);

        Visto::create($validatedData); // Criar um novo visto com os dados validados

        return redirect()->route('vistos.index')->with('success', 'Visto criado com sucesso!'); // Redirecionar para a lista de vistos com uma mensagem de sucesso
    }

    // Mostrar o formulário para editar um visto existente
    public function edit(Visto $visto)
    {
        return view('pages.vistos.edit', compact('visto')); // Retornar a view para editar o visto existente
    }

    // Atualizar um visto existente no banco de dados
    public function update(Request $request, Visto $visto)
    {
        $validatedData = $request->validate([
            'descricao' => 'required|string|max:255',
            'status' => 'required|string|in:EM_ANALISE,ACEITO,RECUSADO',
            'dataSolicitacao' => 'required|date',
        ]);

        $visto->update($validatedData); // Atualizar o visto com os dados validados

        return redirect()->route('vistos.index')->with('success', 'Visto atualizado com sucesso!'); // Redirecionar para a lista de vistos com uma mensagem de sucesso
    }

    // Mostrar os detalhes de um visto
    public function show(Visto $visto)
    {
        return view('pages.vistos.show', compact('visto')); // Retornar a view com os detalhes do visto
    }

    // Excluir um visto do banco de dados
    public function destroy(Visto $visto)
    {
        $visto->delete(); // Excluir o visto

        return redirect()->route('vistos.index')->with('success', 'Visto excluído com sucesso!'); // Redirecionar para a lista de vistos com uma mensagem de sucesso
    }
}
