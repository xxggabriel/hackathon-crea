@extends('layouts.app')

@section('title', 'Solicitação de Visto')

@section('content')
    <div class="container">
        <h1>Solicitação de Visto</h1>

        <form action="{{ route('vistos.store') }}" method="POST">
            @csrf

            {{-- <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" class="form-control" required>
            </div> --}}

            <div class="form-group">
                <label for="status">UF</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>

            {{-- <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="EM_ANALISE">Em Análise</option>
                    <option value="ACEITO">Aceito</option>
                    <option value="RECUSADO">Recusado</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dataSolicitacao">Data de Solicitação</label>
                <input type="date" name="dataSolicitacao" id="dataSolicitacao" class="form-control" required>
            </div> --}}

            <button type="submit" class="btn btn-primary">Solicitar Visto</button>
            <a href="{{ route('vistos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
