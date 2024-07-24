@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da ART</h1>

    <dl class="row">
        <dt class="col-sm-3">Número</dt>
        <dd class="col-sm-9">{{ $art->numero }}</dd>

        <dt class="col-sm-3">Data de Registro</dt>
        <dd class="col-sm-9">{{ $art->data_registro->format('d/m/Y') }}</dd>

        <dt class="col-sm-3">Tipo</dt>
        <dd class="col-sm-9">{{ $art->tipo }}</dd>

        <dt class="col-sm-3">Situação</dt>
        <dd class="col-sm-9">{{ $art->situacao }}</dd>

        {{-- <dt class="col-sm-3">Responsável Técnico</dt>
        <dd class="col-sm-9">{{ $art->responsavelTecnico->nme ?? 'N/A' }}</dd> --}}

        <dt class="col-sm-3">Nome do Contratante</dt>
        <dd class="col-sm-9">{{ $art->contratante_nome }}</dd>

        <dt class="col-sm-3">CPF/CNPJ do Contratante</dt>
        <dd class="col-sm-9">{{ $art->contratante_cnpj }}</dd>

        <dt class="col-sm-3">Descrição da Obra/Serviço</dt>
        <dd class="col-sm-9">{{ $art->obraOuServico_descricao }}</dd>

        <dt class="col-sm-3">Local da Obra/Serviço</dt>
        <dd class="col-sm-9">{{ $art->obraOuServico_local }}</dd>
    </dl>

    <a href="{{ route('arts.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
