<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SENAC TEC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <?php include_once __DIR__ . "/include/header.php" ?>

  <main>
    <section class="container-fluid p-5">
      <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center">
          <?php

          class Navigation
          {
            private $pagina, $pasta;
            public function __construct($pagina, $pasta = null)
            {
              $this->setPagina($pagina);
              $this->setPasta($pasta);
              $this->includePagina();
            }

            public function setPagina($pagina)
            {
              $this->pagina = $pagina;
            }

            public function setPasta($pasta)
            {
              $this->pasta = $pasta;
            }

            public function getPagina()
            {
              return $this->pagina;
            }

            public function getPasta()
            {
              return $this->pasta;
            }

            public function includePagina()
            {
              if ($this->pagina && !$this->pasta) {
                include_once (__DIR__ . '/POO/' . $this->getPagina() . '.php');
              } else if ($this->pagina && $this->pasta) {
                include_once (__DIR__ . '/POO/' . $this->getPasta() . '/' . $this->getPagina() . '.php');
              } else {
                echo "<h1>Página não Encontrada</h1>";
              }
            }
          }

          $navigation = new Navigation(@$_GET['pagina'], @$_GET['pasta']);

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