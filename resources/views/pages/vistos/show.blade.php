@extends('layouts.app')

@section('title', 'Detalhes do Visto')

@section('content')
<div class="container">
    <h1>Detalhes do Visto</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <p class="card-text">{{ $visto->descricao }}</p>

            <h5 class="card-title">Status</h5>
            <p class="card-text">{{ $visto->status }}</p>

            <h5 class="card-title">Data de Solicitação</h5>
            <p class="card-text">{{ $visto->dataSolicitacao }}</p>

            <a href="{{ route('vistos.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>
@endsection
