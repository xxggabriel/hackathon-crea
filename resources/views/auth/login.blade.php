<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login CREA</title>
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
      <div class="col-md-6">
        <div class="card mt-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form>
              <!-- CPF/CNPJ Login -->
              <div class="form-group">
                <label for="cpfCnpj">CPF ou CNPJ</label>
                <input type="text" class="form-control" id="cpfCnpj" placeholder="Digite seu CPF ou CNPJ">
              </div>
              <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Senha">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center mt-3">
                <div class="row">
                    <div class="col">
                        <a href="#" class="d-block">Esqueci minha senha</a>
                    </div>
                    <div class="col">
                        <a href="#" class="d-block">Novo cadastro</a>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Gov.br Login -->
            <button class="btn btn-success btn-block" onclick="loginGovBr()">Entrar com Gov.br</button>
            <hr>
            <!-- Certificado Digital Login -->
            <button class="btn btn-info btn-block" onclick="loginCertificadoDigital()">Entrar com Certificado Digital</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 4 JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script>
    function loginGovBr() {
      // Redirecionar para a página de login do Gov.br
      window.location.href = 'https://sso.gov.br/login';
    }

    function loginCertificadoDigital() {
      // Função para login com certificado digital
      alert('Implementar login com certificado digital');
    }
  </script>
</body>
</html>
