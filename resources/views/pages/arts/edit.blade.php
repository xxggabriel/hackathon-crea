@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar ART</h1>

    <form action="{{ route('arts.update', $art->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" value="{{ $art->numero }}" required>
        </div>
        <div class="form-group">
            <label for="data_registro">Data de Registro</label>
            <input type="date" class="form-control" id="data_registro" name="data_registro" value="{{ $art->data_registro }}" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="obra" {{ $art->tipo == 'obra' ? 'selected' : '' }}>Obra</option>
                <option value="servico" {{ $art->tipo == 'servico' ? 'selected' : '' }}>Serviço</option>
                <option value="cargo" {{ $art->tipo == 'cargo' ? 'selected' : '' }}>Cargo</option>
                <option value="funcao" {{ $art->tipo == 'funcao' ? 'selected' : '' }}>Função</option>
            </select>
        </div>
        <div class="form-group">
            <label for="situacao">Situação</label>
            <select class="form-control" id="situacao" name="situacao" required>
                <option value="ativa" {{ $art->situacao == 'ativa' ? 'selected' : '' }}>Ativa</option>
                <option value="baixada" {{ $art->situacao == 'baixada' ? 'selected' : '' }}>Baixada</option>
                <option value="cancelada" {{ $art->situacao == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
            </select>
        </div>
        {{-- <div class="form-group">
            <label for="responsavelTecnico_id">Responsável Técnico</label>
            <select class="form-control" id="responsavelTecnico_id" name="responsavelTecnico_id" required>
                <!-- Preencha com os profissionais disponíveis -->
            </select>
        </div> --}}
        <div class="form-group">
            <label for="contratante_nome">Nome do Contratante</label>
            <input type="text" class="form-control" id="contratante_nome" name="contratante_nome" value="{{ $art->contratante_nome }}" required>
        </div>
        <div class="form-group">
            <label for="contratante_cnpj">CPF/CNPJ do Contratante</label>
            <input type="text" class="form-control" id="contratante_cnpj" name="contratante_cnpj" value="{{ $art->contratante_cnpj }}" required>
        </div>
        <div class="form-group">
            <label for="obraOuServico_descricao">Descrição da Obra/Serviço</label>
            <input type="text" class="form-control" id="obraOuServico_descricao" name="obraOuServico_descricao" value="{{ $art->obraOuServico_descricao }}" required>
        </div>
        <div class="form-group">
            <label for="obraOuServico_local">Local da Obra/Serviço</label>
            <input type="text" class="form-control" id="obraOuServico_local" name="obraOuServico_local" value="{{ $art->obraOuServico_local }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
