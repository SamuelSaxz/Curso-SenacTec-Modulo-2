<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Senac</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
</body>
<?php include_once (dirname(__DIR__) . "/include/header.php") ?>
<!-- Carrossel de Imagens -->
<div class="container-fluid">
  <div class="row justify-content-center">
    <!-- TODO: Slide de Fotos - Mostrar ùltimos Projetos Cadastrados no Sistema deve mostrar por pessoas diferentes. Exemplo: se eu cadastrar dois projetos, somente 1 mostrará -->
    <div class="col-7">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/samuelAguilar/senactec/img/img-01.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/samuelAguilar/senactec/img/img-01.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/samuelAguilar/senactec/img/img-01.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <hr>
  </div>
  <div class="row justify-content-center">
    <div class="col-5 py-1 border overflow-y-scroll rounded" style="max-height: 500px;">
      <table class="table">
        <thead>
          <h2 class="text-center">Lista de Alunos</h2>
        </thead>
        <tbody>
          <tr class="d-flex align-items-center border border-black rounded mt-1">
            <td class="d-flex justify-content-center align-items-center border-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
              </svg>
            </td>
            <td class="col-10 border-0 d-flex justify-content-between align-items-center">
              <div>
                <h5 class="m-0">Samuel de Almeida Aguilar</h5>
                <p class="m-0">Data de Cadastro: 11/06/2024</p>
              </div>
              <a href="#"><button class="btn btn-dark">Ver Projetos</button></a>
            </td>
          </tr>
          <tr class="d-flex align-items-center border border-black rounded mt-1">
            <td class="d-flex justify-content-center align-items-center border-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
              </svg>
            </td>
            <td class="col-10 border-0 d-flex justify-content-between align-items-center">
              <div>
                <h5 class="m-0">Samuel de Almeida Aguilar</h5>
                <p class="m-0">Data de Cadastro: 11/06/2024</p>
              </div>
              <a href="#"><button class="btn btn-dark">Ver Projetos</button></a>
            </td>
          </tr>
          <tr class="d-flex align-items-center border border-black rounded mt-1">
            <td class="d-flex justify-content-center align-items-center border-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
              </svg>
            </td>
            <td class="col-10 border-0 d-flex justify-content-between align-items-center">
              <div>
                <h5 class="m-0">Samuel de Almeida Aguilar</h5>
                <p class="m-0">Data de Cadastro: 11/06/2024</p>
              </div>
              <a href="#"><button class="btn btn-dark">Ver Projetos</button></a>
            </td>
          </tr>
          <tr class="d-flex align-items-center border border-black rounded mt-1">
            <td class="d-flex justify-content-center align-items-center border-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
              </svg>
            </td>
            <td class="col-10 border-0 d-flex justify-content-between align-items-center">
              <div>
                <h5 class="m-0">Samuel de Almeida Aguilar</h5>
                <p class="m-0">Data de Cadastro: 11/06/2024</p>
              </div>
              <a href="#"><button class="btn btn-dark">Ver Projetos</button></a>
            </td>
          </tr>
          <tr class="d-flex align-items-center border border-black rounded mt-1">
            <td class="d-flex justify-content-center align-items-center border-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
              </svg>
            </td>
            <td class="col-10 border-0 d-flex justify-content-between align-items-center">
              <div>
                <h5 class="m-0">Samuel de Almeida Aguilar</h5>
                <p class="m-0">Data de Cadastro: 11/06/2024</p>
              </div>
              <a href="#"><button class="btn btn-dark">Ver Projetos</button></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-5">
      <form action="#" method="post" enctype="multipart/form-data" class="form-control d-flex flex-column gap-3">
        <h2 class="text-center">Cadastro de Projetos</h2>
        <div class="d-flex flex-column gap-1">
          <label for="createdName" class="form-control border-0 fs-5 fw-bold p-0">Criado Por:</label>
          <select name="createdName" id="createdName" class="form-select" required>
            <option value="Samuel de Almeida Aguilar">Samuel de Almeida Aguilar</option>
            <option value="Samuel de Almeida Aguilar">Samuel de Almeida Aguilar</option>
            <option value="Samuel de Almeida Aguilar">Samuel de Almeida Aguilar</option>
          </select>
        </div>
        <div class="d-flex flex-column gap-1">
          <label for="name" class="form-control border-0 fs-5 fw-bold p-0">Nome Do Projeto</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Digite Aqui" required>
        </div>
        <div class="d-flex flex-column gap-1">
          <label for="description" class="form-control border-0 fs-5 fw-bold p-0">Descrição Do Projeto</label>
          <textarea name="description" id="description" class="form-control" maxlength="255" style="max-height:100px"
            placeholder="Digite Aqui a Descrição"></textarea>
        </div>
        <div class="d-flex flex-column gap-1">
          <label for="archive" class="form-control border-0 fs-5 fw-bold p-0">Arquivos do Projeto</label>
          <input type="file" name="archive" id="archive" class="form-control" multiple required>
        </div>
        <div class="d-flex flex-column gap-1">
          <label for="github" class="form-control border-0 fs-5 fw-bold p-0">Link para Repositório do GitHub (Opcional)
          </label>
          <input type="text" name="github" id="github" class="form-control" placeholder="Link do Repositório">
        </div>
        <div class="d-flex flex-column gap-1">
          <input type="submit" name="github" id="github" class="btn btn-dark" value="Cadastrar Projeto">
        </div>
      </form>
    </div>
  </div>
  <hr>
  <h2 class="text-center">Últimos Projetos Cadastrados</h2>
  <?php 
    require_once(dirname(__DIR__)."/components/Element.php");

    // $element = new Element();

    // $element->cardStart();
    //   $element->cardProject('img-01.png', 'Testando Descrição', 'Projeto Senac Teste', 'Samuel de Almeida Aguilar', '12/06/2024');
    // $element->cardEnd();
    
  ?>
  <div class="row d-flex flex-wrap gap-3">
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/samuelAguilar/senactec/img/img-01.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto Senac</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Criado Por: Samuel Aguilar</li>
          <li class="list-group-item">Data de Criação: 11/06/2024</li>
          <a href="#" class="col text-center m-2">
            <button class="btn btn-outline-primary col-12">Ver Perfil</button>
          </a>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/samuelAguilar/senactec/img/img-01.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto Senac</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Criado Por: Samuel Aguilar</li>
          <li class="list-group-item">Data de Criação: 11/06/2024</li>
          <a href="#" class="col text-center m-2">
            <button class="btn btn-outline-primary col-12">Ver Perfil</button>
          </a>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/samuelAguilar/senactec/img/img-01.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto Senac</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Criado Por: Samuel Aguilar</li>
          <li class="list-group-item">Data de Criação: 11/06/2024</li>
          <a href="#" class="col text-center m-2">
            <button class="btn btn-outline-primary col-12">Ver Perfil</button>
          </a>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/samuelAguilar/senactec/img/img-01.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto Senac</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Criado Por: Samuel Aguilar</li>
          <li class="list-group-item">Data de Criação: 11/06/2024</li>
          <a href="#" class="col text-center m-2">
            <button class="btn btn-outline-primary col-12">Ver Perfil</button>
          </a>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/samuelAguilar/senactec/img/img-01.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto Senac</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Criado Por: Samuel Aguilar</li>
          <li class="list-group-item">Data de Criação: 11/06/2024</li>
          <a href="#" class="col text-center m-2">
            <button class="btn btn-outline-primary col-12">Ver Perfil</button>
          </a>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/samuelAguilar/senactec/img/img-01.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto Senac</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Criado Por: Samuel Aguilar</li>
          <li class="list-group-item">Data de Criação: 11/06/2024</li>
          <a href="#" class="col text-center m-2">
            <button class="btn btn-outline-primary col-12">Ver Perfil</button>
          </a>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/samuelAguilar/senactec/img/img-01.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto Senac</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Criado Por: Samuel Aguilar</li>
          <li class="list-group-item">Data de Criação: 11/06/2024</li>
          <a href="#" class="col text-center m-2">
            <button class="btn btn-outline-primary col-12">Ver Perfil</button>
          </a>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/samuelAguilar/senactec/img/img-01.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto Senac</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Criado Por: Samuel Aguilar</li>
          <li class="list-group-item">Data de Criação: 11/06/2024</li>
          <a href="#" class="col text-center m-2">
            <button class="btn btn-outline-primary col-12">Ver Perfil</button>
          </a>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (dirname(__DIR__) . "/include/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>