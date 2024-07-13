<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php include_once dirname(__DIR__) . "/include/header.php" ?>
  <main>
    <section class="container-fluid p-5">
      <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center">
          <h1>Função para Fatorial</h1>
          <form action="/samuelAguilar/pages/Fatorial.php" method="post" class="col-6 d-flex flex-column gap-3">
            <div class="form-group">
              <label for="numero">Número</label>
              <input type="number" class="form-control col-6" id="numero" name="numero" placeholder="Número">
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
          </form>
          <?php
          include_once dirname(__DIR__) . "/POO/Fatorial.php";
          echo "<h2>Resultado</h2>";
          $fatorial = new funcaoFatorial(@$_POST['numero']);
          ?>
        </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>