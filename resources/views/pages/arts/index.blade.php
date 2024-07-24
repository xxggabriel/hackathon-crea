@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de ARTs</h1>
    <a href="{{ route('arts.create') }}" class="btn btn-primary mb-3">Criar ART</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Número</th>
                <th>Data de Registro</th>
                <th>Tipo</th>
                <th>Situação</th>
                {{-- <th>Responsável Técnico</th> --}}
                <th>Contratante</th>
                <th>Obra/Serviço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arts as $art)
                <tr>
                    <td>{{ $art->numero }}</td>
                    <td>{{ $art->data_registro->format('d/m/Y') }}</td>
                    <td>{{ $art->tipo }}</td>
                    <td>{{ $art->situacao }}</td>
                    {{-- <td>{{ $art->responsavelTecnico->nme ?? 'N/A' }}</td> --}}
                    <td>{{ $art->contratante_nome }}</td>
                    <td>{{ $art->obraOuServico_descricao }}</td>
                    <td>
                        <a href="{{ route('arts.show', $art->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('arts.edit', $art->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('arts.destroy', $art->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
