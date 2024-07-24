@extends('layouts.app')

@section('title', 'Lista de Vistos')

@section('content')
<div class="container">
    <h1>Lista de Vistos</h1>
    <a href="{{ route('vistos.create') }}" class="btn btn-primary mb-3">Solicitar Visto</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Data de Solicitação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vistos as $visto)
                <tr>
                    <td>{{ $visto->id }}</td>
                    <td>{{ $visto->descricao }}</td>
                    <td>{{ $visto->status }}</td>
                    <td>{{ $visto->dataSolicitacao }}</td>
                    <td>
                        <a href="{{ route('vistos.show', $visto->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('vistos.edit', $visto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('vistos.destroy', $visto->id) }}" method="POST" style="display:inline;">
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
