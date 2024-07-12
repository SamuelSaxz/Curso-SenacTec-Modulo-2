<?php

class Element
{

  public function cardStart()
  {
    echo "<div class='row d-flex flex-wrap gap-3'>";
  }
  public function cardProject(string $image, string $description, string $name, string $createdName, string $date)
  {
    echo "
      <div class='col d-flex justify-content-center'>
        <div class='card' style='width: 18rem;'>
          <img src='/samuelAguilar/senactec/img/$image' class='card-img-top'>
          <div class='card-body'>
            <h5 class='card-title'>$name</h5>
            <p class='card-text'>$description</p>
          </div>
          <ul class='list-group list-group-flush'>
            <li class='list-group-item'>Criado Por: $createdName</li>
            <li class='list-group-item'>Data de Criação: $date</li>
            <a href='#' class='col text-center m-2'>
              <button class='btn btn-outline-primary col-12'>Ver Perfil</button>
            </a>
          </ul>
          <div class='d-flex justify-content-center m-2'>
            <a href='#' class='col text-center'>
              <button class='btn btn-dark col-12'>Ver Projeto</button>
            </a>
          </div>
        </div>
      </div>
    ";
  }

  public function cardEnd () 
  {
    echo "</div>";
  }
}