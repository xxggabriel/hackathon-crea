<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro de ART</title>
    <!-- Bootstrap 4 CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CREA</a>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="card mt-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Dados da ART</h5>

                            <div class="row justify-content-between">
                                <div class="form-group">
                                    <label for="cpfCnpj">Forma de registro</label>

                                    <select class="form-control" name="forme_de_registro" id="">
                                        <option value="">Selecionar</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cpfCnpj">N° ART vinculada forma de registro</label>

                                    <input type="text" class="form-control" id="n_art_vinculada_forma_registro"
                                        placeholder="">
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="form-group">
                                    <label for="cpfCnpj">Participação técnica</label>

                                    <select class="form-control" name="forme_de_registro" id="">
                                        <option value="">Selecionar</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cpfCnpj">N° ART vinculada participação técnica</label>

                                    <input type="text" class="form-control" id="n_art_vinculada_participacao_tecnica"
                                        placeholder="">
                                </div>
                            </div>

                            <div class="row justify-content-between">

                                <div class="form-group">
                                    <label for="cpfCnpj">N° Regularização da Notificação</label>

                                    <input type="text" class="form-control" id="n_regularizacao_da_notificacao"
                                        placeholder="">
                                </div>

                            </div>

                            <div class="row justify-content-between">

                                <div class="form-group">
                                    <label for="cpfCnpj">Empresa contratada</label>

                                    <select class="form-control" name="empresa_contratada" id="empresa_contratada">
                                        <option value="">Selecionar</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card mt-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Dados do Contrato</h5>

                            <div class="row justify-content-between">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="cpfCnpj">Contratante</label>
                                            <input type="text" class="form-control"
                                                id="n_art_vinculada_forma_registro" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="cpfCnpj">CPF/CNPJ</label>
                                            <input type="text" class="form-control"
                                                id="n_art_vinculada_forma_registro" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 50px;">
                                            <label for="cpfCnpj">Tipo de Endereço</label>
                                            <select class="form-control" name="tipo_endereco" id="">
                                                <option value="">Selecione</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Tipo Logradouro</label>
                                            <select class="form-control" name="nome_logradouro" id="">
                                                <option value="">Selecione</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">

                                    <!-- -->
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 25px;">
                                            <label for="cpfCnpj">CEP</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Logradouro</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">

                                    <div class="row">
                                        <div class="form-group" style="width: 60px;margin-right:10px;">
                                            <label for="cpfCnpj">Número</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group" style="width: 60px;margin-right:10px;">
                                            <label for="cpfCnpj">Quadra</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group" style="width: 60px;margin-right:10px;">
                                            <label for="cpfCnpj">Lote</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 25px;">
                                            <label for="cpfCnpj">Complemento</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Bairro</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 5px">
                                            <label for="cpfCnpj">UF</label>
                                            <select name="uf" id="" class="form-control">
                                                <option value="">Selecione</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Cidade</label>
                                            <select name="cidade" id="" class="form-control">
                                                <option value="">Selecione</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-7">
                                    <div class="row">
                                        <div class="form-group" style="width:100%; margin-right: 25px;">
                                            <label for="cpfCnpj">E-mail</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-5">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 5px; width:50px;">
                                            <label for="cpfCnpj">DDD</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Fone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 25px;width: 130px;">
                                            <label for="cpfCnpj">N° do Contrato</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group" >
                                            <label for="cpfCnpj">Data inicial do contrato</label>
                                            <input type="date" class="form-control">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 5px">

                                            <label for="cpfCnpj">Data final do contrato</label>
                                            <input type="date" class="form-control">
                                        </div>

                                        <div class="form-group" style="width: 180px;">
                                            <label for="cpfCnpj">Valor da Obra/Serviço</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mt-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Dados da Obra/Serviço</h5>

                            <div class="row justify-content-between">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 25px;">
                                            <label for="cpfCnpj">CEP</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Logradouro</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">

                                    <div class="row">
                                        <div class="form-group" style="width: 60px;margin-right:10px;">
                                            <label for="cpfCnpj">Número</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group" style="width: 60px;margin-right:10px;">
                                            <label for="cpfCnpj">Quadra</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group" style="width: 60px;margin-right:10px;">
                                            <label for="cpfCnpj">Lote</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 25px;">
                                            <label for="cpfCnpj">Complemento</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Bairro</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 5px">
                                            <label for="cpfCnpj">UF</label>
                                            <select name="uf" id="" class="form-control">
                                                <option value="">Selecione</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Cidade</label>
                                            <select name="cidade" id="" class="form-control">
                                                <option value="">Selecione</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="form-group" style="margin-right:5px;">
                                            <label for="cpfCnpj">Data inicial</label>
                                            <input type="date" class="form-control">
                                        </div>

                                        <div class="form-group" >

                                            <label for="cpfCnpj">Previsão termino</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="row">
                                        <div class="form-group" style="width: 130px;margin-right:25px;">
                                            <label for="cpfCnpj">Latitude</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group" style="width: 130px;">
                                            <label for="cpfCnpj">Longitude</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 25px;">
                                            <label for="cpfCnpj">Finalidade</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Selecione</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Código/Obra pública</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="form-group" style="width:100%; margin-right: 25px;">
                                            <label for="cpfCnpj">Nome do Proprietário</label>
                                            <input type="text" class="form-control">
                                        </div>



                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="row">
                                        <div class="form-group" >
                                            <label for="cpfCnpj">CPF/CNPJ</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-7">
                                    <div class="row">
                                        <div class="form-group" style="width:100%; margin-right: 25px;">
                                            <label for="cpfCnpj">E-mail</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-5">
                                    <div class="row">
                                        <div class="form-group" style="margin-right: 5px; width:50px;">
                                            <label for="cpfCnpj">DDD</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="cpfCnpj">Fone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div>
                            <button type="submit" class="btn btn-primary">Enviar ART</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
