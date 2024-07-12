<?php

include_once 'SegundoGrau.php';
class OutrosMetodos extends funcaoSegundoGrau
{
  private $resultado;

  public function __construct($a, $b, $c)
  {
    parent::__construct($a, $b, $c);
  }

  public function fatorial()
  {
    $fatorial = $this->getA();
    for ($i = $this->getA(); $i > 1; $i--) {
      $fatorial = $fatorial * ($i - 1);
    }
    $this->resultado = $fatorial;
    echo "Resultado do fatorial: " . $this->resultado;
  }

  public function imc()
  {
    if ($this->getA() > 0 && $this->getB() > 0) {
      $imc = $this->getB() / ($this->getA() * $this->getA());
      $this->resultado = $imc;
      echo "Resultado do IMC: " . $this->resultado;
    }

    return 0;
  }

  public function divisao()
  {
    $divisao = $this->getA() / $this->getB();
    $this->resultado = $divisao;
    echo "Resultado da divisão: " . $this->resultado;
  }

  public function login()
  {
    if ($this->getA() == "SamuelSaxz") {
      if ($this->getB() == "samuelaguilar@gmail.com") {
        if ($this->getC() == "123456") {
          echo "Login success <br>";
          echo "Nome do Usuário: " . $this->getA() . "<br>";
          echo "E-mail: " . $this->getB() . "<br>";
          echo "Senha: " . $this->getC() . "<br>";
        } else {
          return "Invalid password";
        }
      } else {
        return "Invalid email";
      }
    } else {
      return "Invalid user";
    }
  }
}

?>

<h1>Várias Functions</h1>
<form action="/samuelAguilar/index.php?pagina=OutrosMetodos&pasta=/POLIMORFISMO" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="select">Selecione uma função</label>
    <select class="form-select" aria-label="Default select example" id="select" name="select">
      <option value="fatorial">Fatorial</option>
      <option value="imc">IMC</option>
      <option value="divisao">Divisão</option>
      <option value="login">Login</option>
      <option value="execDelta">Segundo Grau</option>
    </select>
  </div>
  <div class="form-group">
    <label for="a">A</label>
    <input type="text" class="form-control col-6" id="a" name="a" placeholder="Número">
  </div>
  <div class="form-group">
    <label for="b">B</label>
    <input type="text" class="form-control col-6" id="b" name="b" placeholder="Número">
  </div>
  <div class="form-group">
    <label for="c">C</label>
    <input type="text" class="form-control col-6" id="c" name="c" placeholder="Número">
  </div>
  <button type="submit" class="btn btn-primary">Executar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $outrosMetodos = new OutrosMetodos(@$_POST['a'], @$_POST['b'], @$_POST['c']);
  switch($_POST['select']) {
    case 'fatorial':
      $outrosMetodos->fatorial();
      break;
    case 'imc':
      $outrosMetodos->imc();
      break;
    case 'divisao':
      $outrosMetodos->divisao();
      break;
    case 'login':
      echo $outrosMetodos->login();
      break;
    case 'execDelta':
      $outrosMetodos->execDelta();
      break;
  }
}