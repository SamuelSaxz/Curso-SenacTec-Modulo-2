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
          <h1>Função para Força</h1>
          <form action="/samuelAguilar/pages/Força.php" method="post" class="col-6 d-flex flex-column gap-3">
            <div class="form-group">
              <label for="massa">Massa</label>
              <input type="number" class="form-control col-6" id="massa" name="massa" placeholder="Em Quilogramas">
            </div>
            <div class="form-group">
              <label for="aceleracao">Aceleração</label>
              <input type="number" class="form-control col-6" id="aceleracao" name="aceleracao"
                placeholder="Em Metros por Segundo">
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
          </form>
          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include_once dirname(__DIR__) . "/POO/Forca.php";
            echo "<h2>Resultado</h2>";
            $forca = new Forca(@$_POST['massa'], @$_POST['aceleracao']);
            echo "Força: " . $forca->calc() . " Newtons";
          }
          ?>
        </div>
      </div>
    </section>
  </main>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>