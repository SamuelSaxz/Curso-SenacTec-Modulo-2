<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid d-flex gap-4">
        <a class="navbar-brand" href="#">EADS Ltda</a>
        <a href="#" class="nav-link">Login</a>
        <a href="#" class="nav-link">Cadastrar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Funções
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=segundoGrau">Função do 2° Grau</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=Imc">Função do IMC</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=Forca">Função para Força</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=Fatorial">Função para Fatorial</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=Bissexto">Função para Ano Bissexto</a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=JurosSimples">Função para Juro
                Simples</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=Km">Função para Km</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=Multiplicar">Função para Multiplicar</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=Login">Função para Login</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=Register">Função para Cadastro</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=Banco">Função para Banco</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=PrimeNumber">Função para Número Primo</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/samuelAguilar/index.php?pagina=OutrosMetodos&pasta=/POLIMORFISMO">Outros Metodos</a></li>
            </li>
          </ul>
          </li>
          </ul>
          <form class=" col-6 d-flex justify-content-center align-items-center" role="search"></form>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="container-fluid p-5">
      <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center">
          <?php

          class Navigation
          {
            private $pagina, $pasta;
            public function __construct( $pagina, $pasta = null)
            {
              $this->setPagina($pagina);
              $this->setPasta($pasta);
              $this->includePagina();
            }

            public function setPagina( $pagina){
              $this->pagina = $pagina;
            }

            public function setPasta( $pasta){
              $this->pasta = $pasta;
            }

            public function getPagina(){
              return $this->pagina;
            }

            public function getPasta(){
              return $this->pasta;
            }

            public function includePagina(){
              if($this->pagina && !$this->pasta) {
                include_once(__DIR__.'/POO/'.$this->getPagina().'.php'); 
              }
              else if($this->pagina && $this->pasta) {
                include_once(__DIR__.'/POO/'.$this->getPasta().'/'.$this->getPagina().'.php'); 
              }
              else {
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
