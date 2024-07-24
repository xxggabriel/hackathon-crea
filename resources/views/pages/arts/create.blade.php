@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar ART</h1>

    <form action="{{ route('arts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" required>
        </div>
        <div class="form-group">
            <label for="data_registro">Data de Registro</label>
            <input type="date" class="form-control" id="data_registro" name="data_registro" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="obra">Obra</option>
                <option value="servico">Serviço</option>
                <option value="cargo">Cargo</option>
                <option value="funcao">Função</option>
            </select>
        </div>
        <div class="form-group">
            <label for="situacao">Situação</label>
            <select class="form-control" id="situacao" name="situacao" required>
                <option value="ativa">Ativa</option>
                <option value="baixada">Baixada</option>
                <option value="cancelada">Cancelada</option>
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
            <input type="text" class="form-control" id="contratante_nome" name="contratante_nome" required>
        </div>
        <div class="form-group">
            <label for="contratante_cnpj">CPF/CNPJ do Contratante</label>
            <input type="text" class="form-control" id="contratante_cnpj" name="contratante_cnpj" required>
        </div>
        <div class="form-group">
            <label for="obraOuServico_descricao">Descrição da Obra/Serviço</label>
            <input type="text" class="form-control" id="obraOuServico_descricao" name="obraOuServico_descricao" required>
        </div>
        <div class="form-group">
            <label for="obraOuServico_local">Local da Obra/Serviço</label>
            <input type="text" class="form-control" id="obraOuServico_local" name="obraOuServico_local" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
