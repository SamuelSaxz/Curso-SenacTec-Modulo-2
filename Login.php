<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php include_once __DIR__ . "/include/header.php" ?>
  <main>
    <section class="container-fluid p-5">
      <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center">
          <h1>Login</h1>
          <form action="/samuelAguilar/Login.php" method="POST" class="col-6 d-flex flex-column gap-3">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control col-6" id="email" name="email" placeholder="E-mail">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control col-6" id="password" name="password" placeholder="Senha">
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-primary">
          </form>
        </div>
      </div>
  </main>
  <?php
  // Incluindo o Read.php
  include_once __DIR__ . "/POO/CRUD/Read.php";

  // Verificando se o método de requisição é POST e se os dados estão preenchidos
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['email']) && !empty($_POST['password'])) {
    // Criando um objeto Read
    $read = new Read(
      'users',
      ['email', 'password'],
      [$_POST['email'], $_POST['password']]
    );
    echo $read->execRead()["name"];
  }
  else {
    echo "Por favor, preencha todos os campos.";
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>