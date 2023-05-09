<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro de Cliente</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cadastro_cliente.php">Cadastro de Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
            </ul>
          </li>
        </ul>
      
      </div>
    </div>
  </div>
  </nav>
<form action="insert.php" method="post">
<div class="container">
<div class="row" style="margin-top: 100px;">
  <div class="row">
    <h2>Dados do Cliente</h2>
    <div class="col-12">

      <input type="text" class="form-control" name="nome" placeholder="Nome do Cliente" aria-label="First name">
    </div>
    <div class="col-8 espaco">
      <input type="text" class="form-control" name="endereco" placeholder="Digite o endereço" aria-label="Last name">
    </div>
    <div class="col-4 espaco">
      <input type="number" class="form-control" name="numero" placeholder="Número" aria-label="Last name">
    </div>
    <div class="col-5 espaco">
      <input type="text" class="form-control" name="cidade" placeholder="Cidade" aria-label="Last name">
    </div>
    <div class="col-5 espaco">
      <input type="text" class="form-control" name="bairro" placeholder="Bairro" aria-label="Last name">
    </div>
      <div class="col-2 espaco">
        <input type="text" class="form-control" name="estado" placeholder="Estado" aria-label="Last name">
    </div>
    <div class="col-3 espaco">
      <input type="number" class="form-control" name="cep" placeholder="CEP" aria-label="Last name">
    </div>
      <div class="col-3 espaco">
        <input type="number" class="form-control" name="telefone" placeholder="Telefone" aria-label="Last name">
  </div>  
<div class="col-3 espaco">
  <input type="number" class="form-control" name="cpf" placeholder="CPF" aria-label="Last name">
</div>
  <div class="col-3 espaco">
    <input type="text" name="rg" class="form-control" placeholder="RG" aria-label="Last name">
</div>
<div class="col-12 espaco">
  <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Last name">
  </div>

  <div class="col-10"></div>
<div class="col-4">
  <input type="submit" class="btn btn-success" value="Cadastrar">
</div>
</form>

</div>
<div> </div>

<script type="text/javascript">

  $("#telefone").mask("(00) 00000-0000");

  $("#RG").mask("00.000.000-00");
  
  $("#CPF").mask("000.000.000-00");
  
  $("#CEP").mask("00000-000");
  
</script>



</div>
</body>
</html>